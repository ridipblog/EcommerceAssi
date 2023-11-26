<?php

namespace App\MyMethod;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeMethods
{
    public static function getProducts()
    {
        $products = DB::table('product')
            ->get();
        foreach ($products as $product) {
            $product->product_image = Storage::url($product->product_image);
        }
        return $products;
    }
    public static function getCountOrders()
    {
        $count_orders = DB::table('my_order')
            ->count();
        return $count_orders;
    }
    public static function getCountCart()
    {
        $count_cart = DB::table('my_cart')
            ->count();
        return $count_cart;
    }
}
