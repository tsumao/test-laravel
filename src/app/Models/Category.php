<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
         'content'
     ];

    protected $guarded = array('id');
    public static $rules = array(
        'author_id' => 'required',
    );
}