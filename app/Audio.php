<?php
namespace App;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Audio extends Model
{
    use SoftDeletes;

    protected $table = "audios";
    protected $dates = ['deleted_at'];

    public static function get(){
        return Audio::where('status', 1)->orderBy('created_at', 'DESC')->get();
    }

    public function getSubcategoriaPrincipal(){
        return ($this->subcategorias->count()) ? $this->subcategorias->first() : null;
    }

    public function getUrl(){
        return url("audio/$this->id/" . Str::slug(html_entity_decode($this->titulo)));
    }

    public function getShortDescripcionAttribute(){
        return substr(trim(strip_tags(html_entity_decode($this->descripcion))), 0, 150) . '...';
    }

    public function indexar(){
        $object_type = 'App\\Audio';
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

        $contenido = Helper::clean_string("$this->contenido $autores $etiquetas");
        $contenido_indexado->contenido = $contenido;
        $contenido_indexado->save();
    }

    public function autor(){
        return $this->hasOne(Autor::class, 'id', 'id');
    }

    public function autores(){
        return $this->belongsToMany(
            Autor::class,
            'audios_autores',
            'audio_id',
            'autor_id'
        );
    }

    public function etiquetas(){
        return $this->belongsToMany(
            Tag::class,
            'audios_tags',
            'audio_id',
            'tag_id'
        );
    }

    public function categorias(){
        return $this->belongsToMany(
            Categoria::class,
            'audios_categorias',
            'audio_id',
            'categoria_id'
        );
    }

    public function subcategorias(){
        return $this->belongsToMany(
            Subcategoria::class,
            'audios_subcategorias',
            'audio_id',
            'subcategoria_id'
        );
    }

    public function media_collection(){
        return $this->belongsToMany(
            AudioMedia::class,
            'audios_media_collection',
            'audio_id',
            'media_id'
        );
    }

    public function eventos(){
        return $this->belongsToMany(
            Evento::class,
            'audios_eventos',
            'audio_id',
            'evento_id'
        );
    }

    public function eventosTipos(){
        return $this->belongsToMany(
            EventoTipo::class,
            'audios_eventos_tipos',
            'audio_id',
            'evento_tipo_id'
        );
    }
}
