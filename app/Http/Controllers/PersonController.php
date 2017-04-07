<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PersonController extends Controller
{
  public function index () {
    // GET /people
    // list all people
    $people = Person::all();
    return Response::json($people);
  }

  public function create (Request $request) {
    // POST /people
    // create new person
    Person::create($request->all());
    return Response::json(['person' => 'created']);
  }

  public function show ($id) {
    // GET /people
    // show all people
    $person = Person::find($id);
    return Response::json($person);
  }

  public function update (Request $request, $id) {
    // PUT /people
    // update person
    $person = Person::find($id);
    $person->update($request->all());
    return Response::json(['person' => 'updated']);
  }

  public function destroy ($id) {
    // DELETE /people
    // destroy person
    $person = Person::find($id);
    $person->delete();
    return Response::json(['person' => 'deleted']);
  }
}
