<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'tbluser';

    public $timestamps = false;

    // column sa table
    protected $fillable = [
    'username', 'password'
    ];
}