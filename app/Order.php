<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'payment_method',
        'date',
        'order_status'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    protected $appends = [
        'total',
        'discount'
    ];

    function getTotalAttribute(){
        $total = 0;
        foreach ($this->products as $product){
            $total += $product->price;
        }

        if ($this->payment_methods->name == 'Paypal'){
            $total *= 0.9;
        }

        return $total;
    }

    function getDiscountAttribute(){
        if ($this->payment_methods->name == 'Paypal')
            return '10%';
        else
            return '-';
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_orders');
    }

    public function payment_methods(){
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');

    }


}
