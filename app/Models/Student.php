<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  /** @use HasFactory<\Database\Factories\StudentFactory> */
  use HasFactory;

  public function phoneNumber()
  {
    return $this->hasOneThrough(PhoneNumber::class, School::class);
  }

  public function school()
  {
    return $this->hasOne(School::class);
  }
}