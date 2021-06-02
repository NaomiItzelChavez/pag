<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Projects extends Model{
  protected $table = 'jobs';
 
  public function getConversion(){
    $years = floor($this->experiencia / 12);
    $modulo = $this->experiencia % 12;
    return "$years años $modulo meses";
  }
  
}