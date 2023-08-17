<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sendcontact extends Model
{
    protected $fillable = ['f_name', 'l_name', 'email', 'message'];
}
