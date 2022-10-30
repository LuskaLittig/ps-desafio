<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sigla',
    ];

    public function jogadores()
{
	return $this->hasMany(Jogador::class, 'nacionalidade_id', 'id');
}

}
