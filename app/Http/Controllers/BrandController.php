<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BrandController extends Controller
{
   
    public function __construct() 
    { 
        $this->middleware('auth'); 
    }

    public function index()
    {
        $brands = Brand::latest()->get();
        $brands = Brand::latest()->paginate(3);
        return view('admin.brands.index',compact('brands'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //1 validate
        $validate = $request->validate(
            [
                'brand_name'=>'required|unique:brands|max:10|min:2',
                'brand_image'=>'required|image|mimes:png,jpg,svg,jpeg'
            ],
            [
                'brand_name.required'=>"Please enter brand name",
                'brand_name.max'=>"It's too much here",
                'brand_name.min'=>"It's too little here", 
                
            ]
            );


        //2 uploade image 
 
        $brand_image = $request->file('brand_image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'images/brands/'; 
        $image = $upload_location.$img_name; 
        $brand_image->move($upload_location,$img_name); 

        $brand = new Brand();
        $brand->brand_name =  $request->brand_name;
        $brand->brand_image = $image ;
        $brand->save();
        return redirect()->back()->with('success','Brand Inserted Successfull');
    

    }

    
    public function show(Brand $brand)
    {
        //
    }

    
    public function edit(Brand $brand)
    {
        //
    }

   
    public function update(Request $request, Brand $brand)
    {
        //
    }

    
    public function destroy(Brand $brand)
    {
        //
    }
}
