<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $guarded = [];


  public function getActiveAttribute($att) {
      return [
        0 => 'InActive',
        1 => 'Active'
      ][$att];
  }


  public function scopeActive($query) {
    return $query->where('active', 1);
  }

  public function scopeInActive($query) {
    return $query->where('active', 0);
  }

  public function company() {
    return $this->belongsTo(Company::class);
  }



}
