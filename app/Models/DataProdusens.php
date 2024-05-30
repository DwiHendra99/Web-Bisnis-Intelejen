<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProdusens extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'data_produsens';

    protected $fillable = ['content'];
}
