<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'agenda';
    protected $fillable = ['nome', 'telefone'];
}
