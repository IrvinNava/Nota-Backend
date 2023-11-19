<?php
namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Texto extends Model
{
    use SoftDeletes;

    protected $table = "textos";
    protected $dates = ['deleted_at'];

    public static function get(){
        return Texto::where('status', 1)->orderBy('created_at', 'DESC')->get();
    }

    public function getSubcategoriaPrincipal(){
        return ($this->subcategorias->count()) ? $this->subcategorias->first() : null;
    }

    public function getShortDescripcionAttribute(){
        return substr(trim(strip_tags(html_entity_decode($this->contenido))), 0, 350) . '...';
    }

    public function getUrl(){
        return url("texto/$this->id/" . Str::slug(html_entity_decode($this->titulo)));
    }

    public function indexar(){
        $object_type = 'App\\Texto';
        $contenido_indexado = ContenidoIndexado::where('object_type', $object_type)->where('object_id', $this->id)->get();
        if(!$contenido_indexado->count()){
            $contenido_indexado = new ContenidoIndexado();
            $contenido_indexado->object_type = $object_type;
            $contenido_indexado->object_id = $this->id;
        } else
            $contenido_indexado = $contenido_indexado->first();
        $contenido_indexado->titulo = $this->titulo;

        $autores = implode(',', $this->autores->map(function ($autor){ return "$autor->nombre $autor->apellidos"; })->toArray());
        $categorias = implode(',', $this->categorias->map(function ($categoria){ return $categoria->nombre; })->toArray());
        $subcategorias = implode(',', $this->subcategorias->map(function ($subcategoria){ return $subcategoria->nombre; })->toArray());
        $etiquetas = implode(',', $this->etiquetas->map(function ($etiqueta){ return $etiqueta->nombre; })->toArray());

        $contenido = Helper::clean_string("$this->descripcion $autores $categorias $subcategorias $etiquetas");
        $contenido_indexado->contenido = $contenido;
        $contenido_indexado->save();
    }

    public function autores(){
        return $this->belongsToMany(
            Autor::class,
            'textos_autores',
            'texto_id',
            'autor_id'
        );
    }

    public function etiquetas(){
        return $this->belongsToMany(
            Tag::class,
            'textos_tags',
            'texto_id',
            'tag_id'
        );
    }

    public function categorias(){
        return $this->belongsToMany(
            Categoria::class,
            'textos_categorias',
            'texto_id',
            'categoria_id'
        );
    }

    public function subcategorias(){
        return $this->belongsToMany(
            Subcategoria::class,
            'textos_subcategorias',
            'texto_id',
            'subcategoria_id'
        );
    }

    public function eventos(){
        return $this->belongsToMany(
            Evento::class,
            'textos_eventos',
            'texto_id',
            'evento_id'
        );
    }

    public function eventosTipos(){
        return $this->belongsToMany(
            EventoTipo::class,
            'textos_eventos_tipos',
            'texto_id',
            'evento_tipo_id'
        );
    }
}
