<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profissionais extends Model
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nome',
        'email',
        'phone',
        'specialty',
        'crm',
        'address',
        'opening_hours_start',
        'opening_hours_end',
        'weekday',
        // Adicione outros campos conforme necessário
    ];
}

// id 	name 	email 	phone 	specialty 	crm 	address 	opening_hours_start 	opening_hours_end 	Weekday