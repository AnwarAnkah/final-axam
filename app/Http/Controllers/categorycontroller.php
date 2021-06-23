<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function index()
    {


        $categories = category::all();

        return view('index', compact('category'));
    }


    public function store(Request $request)
    {
        $categories = new category;
        $category->Name = $request->Name;
        $category->id = $request->id;
        
        $category->save();
        return redirect()->backe();
    }
    public function edit($id)
    {
        $category=category::find($id);

        return view ('edit',compact('category'));
    }
    public function destroy($id)
{
$category=category::find($ id);
$category->delete();
return redirect()->back();
}

}
