<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use File; 
use Illuminate\Http\Request;
Use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    //
    function enterproduct()

{
    return view('enterproduct');
}



//
function submitproduct(Request $req){

    $req->validate([

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    $image = $req->image->getClientOriginalName();  
    $req->image->move(public_path('image'), $image);

    
        $product=new Product;
        $product->productname=$req->input('productname');
        $product->productdescription=$req->input('productdescription');
        $product->image=json_encode($image);

        $product->save();
        return redirect('/');
    }

    //

    function showpost(){
        // return DB::select("select * from products");
        $data=Product::all();
        return view('post',['products'=>$data]);
    
    }

        //

        function showadmin(){
            // return DB::select("select * from products");
            $data=Product::all();
            return view('admin',['products'=>$data]);
        
        }

        //
        public function editData($id){
            $findData = Product::findOrFail($id);
            return view('edit')->with('data',$findData);
        }


         //
            public function updateproduct($id, Request $req){

                $image = $req->image->getClientOriginalName(); 

                $req->image->move(public_path('image'), $image);
                
                $product= new Product;
                $product = Product::findOrFail($id);
                $product->productname=$req->input('productname');
                $product->productdescription=$req->input('productdescription');
                $product->image=json_encode($image);
        
                $product->save();
                return redirect('/');
            }

            
             //
        public function destroy($id, Request $req){
            $products = Product::findOrFail($id);
            $data= $products->image;
            File::delete(public_path('image/$data'));
            $products = Product::findOrFail($id);
            $products->delete();
            return redirect('admin');
        }


         
}