<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
   protected $table = 'form_data';
   protected $primeryKey = 'id';

   public $fillable = [
      'name',
      'message',
   ];
}
