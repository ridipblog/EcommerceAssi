<?php

namespace App\Http\Controllers;

use App\MyMethod\HomeMethods;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = HomeMethods::getProducts();
        $count_order = HomeMethods::getCountOrders();
        $count_cart = HomeMethods::getCountCart();
        return view('home', [
            'products' => $products,
            'count_order' => $count_order,
            'count_cart' => $count_cart
        ]);
    }
}
