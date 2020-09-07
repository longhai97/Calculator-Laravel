<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * Active Record
 * @package App
 */
class Book extends Model
{
    protected $table = "books";

    protected $fillable = ['name', 'des', 'author'];
    protected $hidden = ['created_at', 'updated_at'];


}
