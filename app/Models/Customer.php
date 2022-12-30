<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
    * The primary key associated with the table.
    *
    * @var string
    * @var bool
    * @var array
    */
    protected $primaryKey = 'ktp';
    public $incrementing = false;
    protected $fillable=[
        'ktp',
        'nama',
        'no_hp',
        'alamat',
        'usia'
    ];
}
