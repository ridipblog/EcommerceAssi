<?php

namespace App\Http\Controllers;

use App\MyMethod\CartMethod;
use Illuminate\Http\Request;

class AddCartController extends Controller
{
    public function open_cart(Request $request)
    {
        if ($request->ajax()) {
            $status = 400;
            $message = null;
            if (!isset($_GET['product_id'])) {
                $message = "Product Id Not Found !";
            } else {
                $product_id = $_GET['product_id'];
                if ($product_id != null) {
                    $product = CartMethod::getProduct($product_id);
                    if ($product) {
                        $message = $product;
                        $status = 200;
                    } else {
                        $message = "Product Not Found !";
                    }
                } else {
                    $message = "Product Id Not Found !";
                }
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
    public function make_order(Request $request)
    {
        if ($request->ajax()) {
            $status = 400;
            $message = null;
            if (isset($_GET['product_id']) && isset($_GET['quantity']) && isset($_GET['size'])) {
                $product_id = $_GET['product_id'];
                $quantity = $_GET['quantity'];
                $size = $_GET['size'];
                if ($product_id != null && $size != null && $quantity != null) {
                    if (CartMethod::findProduct($product_id)) {
                        if (CartMethod::makeOrder($product_id, $quantity, $size)) {
                            $message = "Order Place Succfully";
                            $status = 200;
                        } else {
                            $message = "Try Later ! Some Problem Execute ";
                        }
                    } else {
                        $message = "Product Not Found !";
                    }
                } else {
                    $message = "Fill Size And Quantity !";
                }
            } else {
                $message = "Required Not Found !";
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
    public function add_to_cart(Request $request)
    {
        if ($request->ajax()) {
            $status = 400;
            $message = null;
            if ($_GET['product_id']) {
                $product_id = $_GET['product_id'];
                if ($product_id != null) {
                    if (CartMethod::findProduct($product_id)) {
                        if (CartMethod::makeCart($product_id)) {
                            $message = "Save In Cart";
                            $status = 200;
                        } else {
                            $message = "Try Later ! Some Problem Execute ";
                        }
                    } else {
                        $message = "Product Not Found !";
                    }
                } else {
                    $message = "Product Id Not Found !";
                }
            } else {
                $message = "Product Id Not Found !";
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }
}
