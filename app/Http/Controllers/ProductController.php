<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Category;




class ProductController extends Controller
{
    public function create(){
        $brands = Brand::get();
        $categories = Category::get();
        $units = Unit::get();
        
        return view('products.addProduct', ['brands' => $brands, 'categories' => $categories, 'units' => $units]);
    
    }

        


    

    // public function store(Request $request){
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'qty' => 'required|numeric',
    //         'price' => 'required|decimal:2',
    //         'category_id'=>'required|String|not_in:0',
    //         'brand_id' => 'required|String|not_in:0',
    //         'unit_id' => 'required|String|not_in:0'
           
             
    //     ]);
         
    //      $newProduct = Products::create($data);
         

    //      return redirect(route('allP.show'));
        

        

    // }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'category_id'=>'required|String|not_in:0',
            'brand_id' => 'required|String|not_in:0',
            'unit_id' => 'required|String|not_in:0'
        ]);
        
        $newProduct = Products::create($data);
        
        // Retrieve all products sorted by creation timestamp in descending order
       
    
        return redirect(route('allP.show'));
    }
    
    public function edit(products $product)

     {
        $brands = Brand::get();
        $categories = Category::get();
        $units = Unit::get();
         return view('products.EditProduct', ['brands' => $brands, 'categories' => $categories, 'units' => $units, 'product' => $product]);
     }

     public function update(Request $request, Products $product)
     {
         
         $data = $request -> validate([
             'name' => 'required|String',
             'price' => 'required|integer',
             'qty' => 'required|integer',
             'category_id'=>'required|String|not_in:0',
             'brand_id' => 'required|String|not_in:0',
             'unit_id' => 'required|String|not_in:0'
           

         ]);     
 
         $product -> update($data);
         
         return redirect() -> route('allP.show');
 
     }

     public function delete(products $product)
     {
         //
 
         $product -> delete();
         return redirect() -> route('allP.show');
     }

     public function details(products $product){
        $brands = Brand::get();
        $categories = Category::get();
        $units = Unit::get();
     
        return view('products.productDetails', ['brands' => $brands, 'categories' => $categories, 'units' => $units, 'product' => $product]);
     
     }

     

    
   
}




    


    







