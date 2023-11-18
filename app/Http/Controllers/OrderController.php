<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Nominal;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function detailItem($id)
    {
        $item = Item::where('id', $id)->first();
        $nominals = Nominal::where('item_id', $item->id)->get();
        return view('checkout/order', compact('item', 'nominals'));
    }

    public function createOrderUser(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        Order::create($request->all());

        return redirect('/');
    }

    public function createOrderAdmin()
    {
        return view('admin/id_order');
    }

    public function updateOrder(Request $request)
    {
        Order::where('id', $request->id_order)->update(['status' => 1]);
        return redirect('/admin/order-checkout');
    }

    public function deleteOrder(Request $request)
    {
        Order::where('id', $request->id_order)->delete();
        return redirect('/admin/order-checkout');
    }

    public function orderCheckoutAdmin()
    {
        $orders = Order::all();
        return view('admin/order_checkout', compact('orders'));
    }


    public function recentOrder()
    {
        $histories = Order::all();
        return view('admin/recent', compact('histories'));
    }
}
