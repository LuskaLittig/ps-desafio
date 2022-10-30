<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome,',
        'idade',
        'foto',
        'nacionalidade_id',
    
    ];

    public function nacionalidade()
{
	return $this->belongsTo(Nacionalidade::class, 'nacionalidade_id', 'id');
}
}
