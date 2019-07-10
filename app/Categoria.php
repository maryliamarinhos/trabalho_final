<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Categoria extends Model
{
    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['nome', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'categorias';

    /**
     * get Created_at para formatar na data brasileira
     *
     */
    public function getCreatedAtAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function livros()
    {
        return $this->hasMany('App\Livro');
    }
}
