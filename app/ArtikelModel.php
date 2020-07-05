<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title', 'body', 'slug', 'tag', 'user_id'];
}
