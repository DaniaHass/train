<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    

     public function index()
    {
        $title="Welcome to my laravel 8 course";
        $description="created by dania ";
        $data= [
            'productOne'=>'iphone',
            'productTwo'=>'Samsung'
        ];
        
               // dd('hello');
      
     //  return view('Products.index',compact('title','description'));
      //  return view('Products.index')->with('title',$title);
          return view('products.index')->with('data',$data);
    } 
        
         // public function show ($id){
          //return $id;
          //}

            public function show($name){
                print_r(route('products')); 
                $data=[
                    'iphone'=>'iphone',
                    'samsung'=>'Samsung'
                ];
                return view('products.index',[
                    'products'=>$data[$name]??'product '.$name.' does not exist .'
                ]);




                
            }


            
           





    
}
