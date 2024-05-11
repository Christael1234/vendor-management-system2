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
            'Address' => 'required',
             'City' => 'required',
             'State' => 'required'


            
        ]);
         
         $newAddress = Address::create($data);
         

        return redirect(route('allAddresses.show'));
        



    

    
}

public function editA(address $address){
    return view('address.editAddress', ['address' => $address]);


}

public function update(Address $address, Request $request){
    $data = $request->validate([
        'Address' => 'required',
        'City' => 'required',
        'State' => 'required'        
        
        
    ]);
     $address->update($data);

     return redirect(route('allAddresses.show'))->with('success', 'Product updated successfully');

}

public function delete(Address $address){
    $address->delete();
    return redirect(route('allAddresses.show'))->with('success', 'Product deleted successfully');


}


}




