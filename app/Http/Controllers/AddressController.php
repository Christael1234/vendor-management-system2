<?php

namespace App\Http\Controllers;
use App\Models\Address;

use Illuminate\Http\Request;

class AddressController extends Controller
{
   
    public function index()
    {
    
    }

    public function create(){

        return view('address.addAddress');
    
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
             'description' => 'nullable'
            
        ]);
         
         $newAddress = Address::create($data);
         

        return redirect(route('address.create'));
        



    

    
}

public function edit(address $address){
    return view('address.editAddress', ['address' => $address]);


}

public function update(Address $address, Request $request){
    $data = $request->validate([
        'name' => 'required',
        
        'description' => 'nullable'
        
    ]);
     $address->update($data);

     return redirect(route('allAddresses.show'))->with('success', 'Product updated successfully');

}

public function delete(Address $address){
    $address->delete();
    return redirect(route('allAddresses.show'))->with('success', 'Product deleted successfully');


}


}




