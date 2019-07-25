<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'mail'
      ];
}
