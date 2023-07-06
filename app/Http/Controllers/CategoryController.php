<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct() 
    { 
        $this->middleware('auth'); 
    }

    public function index()
    {
        $categories = Category::latest()->get();
        $categories = Category::latest()->paginate(3);
        return view('admin.categories.index',compact('categories'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validate = $request->validate(
        [
            'category_name'=>'required|unique:categories|max:10'
        ],
        [
            'category_name.required'=>"Please enter category name",
            'category_name.max'=>"It's too much here",
        ]
        );


    $category = new Category();
    $category->category_name =  $request->category_name;
    $category->user_id = Auth::user()->id;
    $category->save();
    return redirect()->back()->with('success','Category Inserted Successfull');




    }

    public function show(Category $category)
    {
        //
    }

   
    public function edit( $id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));

    }

   
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category -> update([
            'category_name' =>  $request->category_name,
            'user_id' => Auth::user()->id,

        ]);
        return redirect()->route('categories')->with('success','Category updated Successfull');
    }

    
    // public function destroy($id)
    // {
    //     $category = Category::find($id);
    //     $category -> delete();
    //     return redirect()->route('categories')->with('success','Category deleted Successfull');
    // }


     
    public function softDelete($id)
    {
        $category = Category::find($id);
        $category -> delete();
        return redirect()->route('categories')->with('success','Category deleted Successfull');
    }



    public function deletedCategory()
    {

        $trashedCategory = Category::onlyTrashed()->paginate(5);
        return view('admin.categories.deleted',compact('trashedCategory'));
    }

    
    public function restore($id)
    {
        $category = Category::withTrashed()->find($id);
        $category ->restore();
        return redirect()->back()->with('success','Category restored Successfull');
    }

    public function hardDelete($id)
    {
        $category = Category::withTrashed()->find($id);
        $category ->forceDelete();
        return redirect()->back()->with('success','Category Deleted Successfull');
    }

}
