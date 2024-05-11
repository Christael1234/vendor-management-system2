<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Address;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function adP()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $units = Unit::get();
        
        return view('products.addProduct', ['brands' => $brands, 'categories' => $categories, 'units' => $units]);
       
    }

    

  

    public function allP()
    {
        $products = Products::get();
        return view('products.allProducts', ['products' => $products]);
       
    }

    public function addC()
    {
        return view('category.addCategory');
    }

    public function allC()
    {
        $categories = Category::get();
        return view('category.allCategories', ['categories' => $categories]);
        
    }

    public function adU()
    {
        return view('unit.addUnit');
    }

    public function allU()
    {
        $units = Unit::get();
        return view('unit.allUnits', ['units' => $units]);
    }

    public function allB()
    {
        $brands = Brand::get();
        return view('brand.allBrands', ['brands' => $brands]);
  
    }

    public function adB()
    {
        return view('brand.addBrand');
    }

    

    public function createU(){
        return view('unit.addUnit');
    
    }

    public function addA(){
        return view('address.addAddress');
    }

    public function allA(){
        $addresses = Address::get();
        return view('address.allAddresses', ['addresses' => $addresses]);

    }

}


