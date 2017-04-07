<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ItemController extends Controller
{
  public function index () {
    // GET /items
    // list all items
    $items = Item::all();
    return Response::json($items);
  }

  public function create (Request $request) {
    // POST /items
    // create new item
    Item::create($request->all());
    return Response::json(['item' => 'created']);
  }

  public function show ($id) {
    // GET /items
    // show all items
    $item = Item::find($id);
    return Response::json($item);
  }

  public function update (Request $request, $id) {
    // PUT /items
    // update item
    $item = Item::find($id);
    $item->update($request->all());
    return Response::json(['item' => 'updated']);
  }

  public function destroy ($id) {
    // DELETE /items
    // destroy item
    $item = Item::find($id);
    $item->delete();
    return Response::json(['item' => 'deleted']);
  }
}
