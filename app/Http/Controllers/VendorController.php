<?php

namespace App\Http\Controllers;
use App\Models\Vendors;

use Illuminate\Http\Request;

class UnitController extends Controller
{
   
    public function index()
    {
    
    }

    public function create(){
        return view('vendor.addVendor');
    
    }

    public function addU()
    {
        return view('vendor.addVendor');
    }


    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
             'description' => 'nullable'
            
        ]);
         
         $newVendor = Vendors::create($data);
         

        return redirect(route('vendor.create'));
        



    

    
}

public function edit(Vendor $vendor){
    return view('Vendor.editVendor', ['vendor' => $vendor]);


}

public function update(Vendor $vendor, Request $request){
    $data = $request->validate([
        'name' => 'required',
        
        'description' => 'nullable'
        
    ]);
     $vendor->update($data);

     return redirect(route('allV.show'))->with('success', 'Product updated successfully');

}

public function delete(Vendor $vendor){
    $vendor->delete();
    return redirect(route('allV.show'))->with('success', 'Product deleted successfully');


}




}
