<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function requestTestHandler(Request $request)
    {
        $customers = Customer::all();
        dd($customers->toArray());
//        return "Finally! It`s working!";
    }

    public function requestZoo(Request $request)
    {
        $zoo = Zoo::all();
        dd($zoo->toArray());
//        return "yep";
    }

    public function requestCare(Request $request)
    {
        $care = Zoo::all();
        dd($care->toArray());
//        return "da";
    }
}

//public function testAction(Request $request, string, int $id)
//{
//    $model = Customer::findOrFail($id);//null
//
//    if (!$model) {
//       //...
//        return;
//   }
//
//   $name = $model->$name;//null->name
//}
