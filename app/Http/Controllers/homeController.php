<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class homeController extends Controller
{


   
    
   
    function Home() {
        //fetch products from the Products model
        $products_details = Products::inRandomOrder()->limit(10)->get();

        //products filtered by category
        $products_drinks = Products::where('category' , 'drinks')->limit(10)->get();

        $products_fruits = Products::where('category' , 'fruits')->limit(10)->get();



        return view('welcome',
        [
            'products' => $products_details,
            'drinks' => $products_drinks,
            'fruits' => $products_fruits
        ]
    );
    }
}
