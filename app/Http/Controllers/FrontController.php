<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Products;

class FrontController extends Controller
{
public function contact(){
$cat=Category::all();
$subcat=SubCategory::all();
return view('contact')->withcat($cat)->withsub($subcat);
}

    public function index(){
$fe=Products::where('featured',1)->latest('created_at')->first();
$lat=Products::where('featured',0)->latest('created_at')->first();

$cat=Category::all();
$subcat=SubCategory::all();
$pro=Products::all();
    	return view('welcome')->withcat($cat)->withsub($subcat)->withpro($pro)->withfetured($fe)->withlat($lat);
    }
}
