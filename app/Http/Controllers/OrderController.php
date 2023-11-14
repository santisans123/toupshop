<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detailItem($id)
    {
        $item = Item::where('id', $id)->first();
        return view('checkout/order', compact('item'));
    }

    public function createOrderAdmin()
    {
        return view('admin/id_order');
    }

    public function recentOrder()
    {
        return view('admin/recent');
    }
}
