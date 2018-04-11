<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Order;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{

public function deleteOrder($id){

$order=Order::where('id',$id)->first();
$order->delete();
return back();



}
public function deleteCategory($id){

$cat=Category::where('id',$id)->first();
$cat->delete();
return back();

}

public function deleteSubCategory($id){

$cat=SubCategory::where('id',$id)->first();
$cat->delete();
return back();

}

public function order(){
$order=Order::paginate(2);

$order->transform(function($order,$key){
$order->cart=unserialize($order->cart);
//dd($order->cart);
return $order;

});
//dd($order);

return view('Admin.orderlist')->withorder($order);
}

    public function getCategory(){

$catgory=Category::all();

    	return view('Admin.create_category')->withcategory($catgory);
    }

     public function postCategory(Request $request){


$cat=new Category();
$cat->name=$request['name'];

if(input::hasfile('images'))
{

    $file=input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $cat->image=$file->getClientOriginalName();
}

$cat->save();
$category=Category::all();
        return view('Admin.create_category')->withcategory($category);
    


    }
     public function getSubCategory($id){
        //dd($id);
$category=SubCategory::where('category_id',$id)->get();
        return view('Admin.create_subcategory')->withsubcategory($category)->withcategoryid($id);
    }
      public function postSubCategory(Request $request){
        $sub= new SubCategory();
        $sub->name=$request['name'];
        $sub->category_id=$request['categoryid'];
        if(input::hasfile('images'))
{

    $file=input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $sub->image=$file->getClientOriginalName();
}

        $sub->save();
$category=SubCategory::where('category_id',$sub->category_id)->get();
        return view('Admin.create_subcategory')->withsubcategory($category)->withcategoryid($sub->category_id);
    }  

}
