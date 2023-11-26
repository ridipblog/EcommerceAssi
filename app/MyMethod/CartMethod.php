<?php

namespace App\MyMethod;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CartMethod
{
    public static function getProduct($product_id)
    {
        $product = DB::table('product')
            ->where('id', $product_id)
            ->get();
        $product[0]->product_image = Storage::url($product[0]->product_image);
        return $product;
    }
    public static function findProduct($product_id)
    {
        $product = DB::table('product')
            ->where('id', $product_id)
            ->select('id')
            ->get();
        return $product;
    }
    public static function makeOrder($product_id, $quantity, $size)
    {
        $check = false;
        try {
            DB::table('my_order')
                ->insert([
                    'product_id' => $product_id,
                    'qunatity' => $quantity,
                    'size' => $size
                ]);
            $check = true;
        } catch (Exception $e) {
            $check = false;
        }
        return $check;
    }
    public static function makeCart($product_id)
    {
        $check = false;
        try {
            DB::table('my_cart')
                ->insert([
                    'product_id' => $product_id
                ]);
            $check = true;
        } catch (Exception $e) {
            $check = false;
        }
        return $check;
    }
}
