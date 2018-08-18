<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function invoices(){
    	return $this->hasMany('Shop\Invoice');
    }
}
// Mot khach hang co the co tren nhieu hoa don