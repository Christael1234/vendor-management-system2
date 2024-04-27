<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
   
    public function index()
    {
    
    }

    public function createB(){

        return view('brand.addBrand');
    
    }

    public function storeB(Request $request){
        $data = $request->validate([
            'name' => 'required',
             'description' => 'nullable'
            
        ]);
         
         $newBrand = Brand::create($data);
         

        return redirect(route('brand.create'));
        



    

    
}

public function edit(brand $brand){
    return view('brand.editBrand', ['brand' => $brand]);


}

public function update(Brand $brand, Request $request){
    $data = $request->validate([
        'name' => 'required',
        
        'description' => 'nullable'
        
    ]);
     $brand->update($data);

     return redirect(route('allB.show'))->with('success', 'Product updated successfully');

}

public function delete(Brand $brand){
    $brand->delete();
    return redirect(route('allB.show'))->with('success', 'Product deleted successfully');


}


}




