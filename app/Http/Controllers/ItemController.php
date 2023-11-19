<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
//import Model "Post
use App\Models\Post;
//return type View
use Illuminate\View\View;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('welcome', compact('items'));
    }

    public function listItem()
    {
        $items = Item::all();
        return view('admin/list_items', compact('items'));
    }

    public function createItem()
    {
        return view('admin/item_order');
    }

    public function createItemStore(Request $request)
    {
        $file = $request->file('photo');
        $tujuan_upload = 'images/item';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $request['image'] = $tujuan_upload . '/' .$file->getClientOriginalName();
        Item::create($request->all());

        return redirect('/admin/list-items');
    }

    public function updateItem(Request $request)
    {
        $file = $request->file('photo');
        $tujuan_upload = 'images/item';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $request['image'] = $tujuan_upload . '/' .$file->getClientOriginalName();
        Item::where('id', $request->id_item)->update($request->except(['_token', 'id_item', 'photo']));

        return redirect('/admin/list-items');
    }

    public function deleteItem(Request $request)
    {
        Item::where('id', $request->id_item)->delete();

        return redirect('/admin/list-items');
    }
}
