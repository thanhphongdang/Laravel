<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function product(Request $request)
    {
        $order_id = $request->get('id');
        $order    = Order::find($order_id);

        $data = [
            'order'    => $order,
            'products' => $order->products,
        ];
        // dd($data[
        //     "products"
        // ]);
        return view('order_detail.view', $data);
    }
}
