<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
  public function invoices(){
    	return $this->hasMany('Shop\Invoice');
    }
}
// Mot mat hang co the co tren nhieu hoa don