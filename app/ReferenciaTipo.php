<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ReferenciaTipo extends Model
{
    use SoftDeletes;

    protected $table = "referencias_tipos";
    protected $dates = ['deleted_at'];

    public function referencias_tipos(){
        return $this->hasMany(Referencia::class, 'tipo_referencia_id', 'id');
    }
}
