<?php

namespace App\Http\Controllers;

use App\Outfit;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class OutfitController extends Controller
{
  public function index () {
    // GET /outfits
    // list all outfits
    $outfits = Outfit::all();
    return Response::json($outfits);
  }

  public function create (Request $request) {
    // POST /outfits
    // create new outfit
    Outfit::create($request->all());
    return Response::json(['outfit' => 'created']);
  }

  public function show ($id) {
    // GET /outfits
    // show all outfits
    $outfit = Outfit::find($id);
    return Response::json($outfit);
  }

  public function update (Request $request, $id) {
    // PUT /outfits
    // update outfit
    $outfit = Outfit::find($id);
    $outfit->update($request->all());
    return Response::json(['outfit' => 'updated']);
  }

  public function destroy ($id) {
    // DELETE /outfits
    // destroy outfit
    $outfit = Outfit::find($id);
    $outfit->delete();
    return Response::json(['outfit' => 'deleted']);
  }
}
