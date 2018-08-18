<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable=['invoice_num','date_of_sale','good_id','customer_id','amount'];
	// Mot hoa don thuoc ve 1 khach hang
  public function customer(){
    	return $this->belongsTo('Shop\Customer');
    }
    // Mot hoa don thuoc ve 1 mat hang
    public function good(){
    	return $this->belongsTo('Shop\Good');
    }

}
