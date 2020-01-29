<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey = "id";

    protected $fillable = ['title','filename'];
}
