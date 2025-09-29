<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'data_vencimento',
        'status',
        'user_id',
    ];

    protected $casts = [
        'data_vencimento' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
