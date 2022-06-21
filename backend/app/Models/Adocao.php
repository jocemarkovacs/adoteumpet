<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{
    use HasFactory;
    /**
     * O nome da Classe no singular que representa o nome da Tabela no BD no Plural
     * só funciona com palavras em inglês. Quando a palavra é em outra lingua é
     * necessário utilizar a configuração abaixo.
     */
    protected $table = 'adocoes';
    /**
     * Utilizado para evitar ataques ao banco de dados. Especificando apenas os
     * campos que podem e deverão receber informações.
     */
    protected $fillable = ['email', 'valor', 'pet_id'];
    /**
     * Define a relação Adocao com o Pet
     *
     * @return BelongsTo
     */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
