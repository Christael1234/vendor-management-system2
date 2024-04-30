<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;



class ProductController extends Controller
{
    public function create(){
        return view('products.addProduct');
    
    }

        


    

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable'
            
        ]);
         
         $newProduct = Product::create($data);
         

        return redirect(route('product.create'));

        

    }
   
}




    


    







