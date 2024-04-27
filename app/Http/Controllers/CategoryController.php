<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
    
    }

    public function createCategory(){

        return view('category.addCategory');
    
    }

    public function storeCategory(Request $request){
        $data = $request->validate([
            'name' => 'required',
             'description' => 'nullable'
            
        ]);
         
         $newCategory = Category::create($data);
         

        return redirect(route('category.create'));
        



    

    
}

public function edit(category $category){
    return view('category.editCategory', ['category' => $category]);


}

public function update(Category $category, Request $request){
    $data = $request->validate([
        'name' => 'required',
        
        'description' => 'nullable'
        
    ]);
     $category->update($data);

     return redirect(route('allC.show'))->with('success', 'Product updated successfully');

}

public function delete(Category $category){
    $category->delete();
    return redirect(route('allC.show'))->with('success', 'Product deleted successfully');


}


}




