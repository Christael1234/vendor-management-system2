<?php

namespace App\Http\Controllers;
use App\Models\Unit;

use Illuminate\Http\Request;

class UnitController extends Controller
{
   
    public function index()
    {
    
    }

    public function createU(){
        return view('unit.addUnit');
    
    }

    public function addU()
    {
        return view('unit.addUnit');
    }


    public function storeU(Request $request){
        $data = $request->validate([
            'name' => 'required',
             'description' => 'nullable'
            
        ]);
         
         $newUnit = Unit::create($data);
         

        return redirect(route('allU.show'));
        



    

    
}

public function edit(unit $unit){
    return view('unit.editUnit', ['unit' => $unit]);


}

public function update(Unit $unit, Request $request){
    $data = $request->validate([
        'name' => 'required',
        
        'description' => 'nullable'
        
    ]);
     $unit->update($data);

     return redirect(route('allU.show'))->with('success', 'Product updated successfully');

}

public function delete(Unit $unit){
    $unit->delete();
    return redirect(route('allU.show'))->with('success', 'Product deleted successfully');


}




}
