<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Index(Request $request)
    {      
       // if($request){
        //     $busqueda = trim($request->get('buscarpor'));
        //     $produc = Product::where('product_name','like','%'.$busqueda.'%')
        //     ->orderBy('id','asc')
        //     ->get();
        // }return view('admin.allproducts', ['products'=>$produc,'buscarpor'=>$busqueda]);

        $buscarpor = $request->get('buscarpor');
        $allproducts = Product::where('product_name','like','%'.$buscarpor.'%')
                      ->orderBy('id','asc')
                      ->get();
        return view('user_template.home', compact('allproducts','buscarpor'));
        // $allproducts = Product::latest()->get();
        // return view('user_template.home', compact('allproducts'));
    }
//     public function search(Request $request)
// {
//     $q = $request->input('q');

//     $results = DB::table('Product')
//                 ->where('product_name', 'like', '%'.$q.'%')
//                 ->orderBy('id','asc')
//                 // ->orWhere('description', 'like', '%'.$q.'%')
//                 ->get();

//     return view('search', ['results' => $results, 'query' => $q]);
   
// }
    
}
