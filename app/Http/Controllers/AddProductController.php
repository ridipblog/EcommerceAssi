<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AddProductController extends Controller
{
    public function index()
    {
        return view('add_product');
    }
    public function upload(Request $request)
    {
        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $product_rating = $request->product_rating;
        $product_color = $request->product_color;
        $product_file = $request->file('product_file');
        $status = 400;
        $message = null;
        $error_message = [
            'required' => "Fill All Input Field"
        ];
        $validator = Validator::make(
            $request->all(),
            [
                'product_name' => 'required',
                'product_price' => 'required',
                'product_rating' => 'required',
                'product_color' => 'required',
                'product_file' => 'required|image'

            ],
            $error_message
        );
        if ($validator->fails()) {
            $message = $error_message['required'];
        } else {
            $product_url = $product_file->store('public/images/product');
            DB::table('product')->insert([
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_rating' => $product_rating,
                'product_color' => $product_color,
                'product_image' => $product_url
            ]);
            $status = 200;
            $message = "Uploaed !";
        }
        return response()->json(['status' => $status, 'message' => $message]);
    }
}
