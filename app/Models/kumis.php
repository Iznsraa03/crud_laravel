<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kumis extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    public $timestamps = false;
    protected $fillable = ['nim','nama','jurusan'];
}
