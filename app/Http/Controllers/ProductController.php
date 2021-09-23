<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){

    }
    public function insert(){

    }
    public function store($req){
        $req->validate([
            'title'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);

        $filename = $req->image->getClientOriginName();
        $req->image->move(public_path("product_image"),$filename);
        $pro = new Product();

        $pro->title = $req->title;
        $pro->brand = $req->brand;
        $pro->category = $req->category;
        $pro->price = $req->price;
        $pro->image = "default.img";
        $pro->discount_price = $req->discount_price;
        $pro->description = $req->description;
        $pro->save();

        return redirect()->route("homepage");

    }
}
