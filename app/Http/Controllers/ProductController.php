<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\file;
use App\Products;
use App\User;

use App\Category;
use App\SubCategory;
use App\MoreImages;
use Illuminate\Support\Facades\Input;
use yajra\Datatables\Datatables;
class ProductController extends Controller
{
 public function search(Request $request){
$category=Category::all();
$subcategory=SubCategory::all();
$spro=Products::where('name','like','%'.$request['search'].'%')->get();
return view('Product.product')->withproduct($spro)->withcat($category)->withsub($subcategory);

 }

    public function getAllProduct(){
  

//$products=CatProject::paginate(8);

return view('Product.admin_products');
  }
public function updateProduct(Request $request){
$id=$request['id'];
 $product=Products::where('id',$id)->first();  
  if($request['status']==1){

        $product->featured=1;
      }else{
        $product->featured=0;
      } 
$product->name=$request['name'];
$product->price=$request['price'];
$product->color=$request['color'];
$product->code=$request['code'];
$product->size=$request['size'];

//$product->size=$request['size'];
$product->description=$request['description'];
//$product->category_id=$request['subcategory_id'];
$product->subcategory_id=$request['subcategory_id'];

if(input::hasfile('images'))
{

    $file=input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $product->image=$file->getClientOriginalName();
}

    $product->update();
     Session::flash('flash_message', 'Product successfully updated!');
   
     
     return redirect()->back();



}
public function deleteProduct($id){
//$product=CatProject::where('id',$id)->first();
$product=Products::where('id',$id)->first();
$product->delete();
Session::flash('flash_message','product successfully deleted');
return back();

 
}

public function viewSubcategory($id){
  $cat=Category::all();
$sub=SubCategory::all();
$fe=Products::where('featured',1)->latest('created_at')->first();
$sub=SubCategory::where('category_id',$id)->get();
return view('subcatimage')->withsubcat($sub)->withcat($cat)->withsub($sub)->withfetured($fe);

}
public function singleProduct($id){
  $category=Category::all();
  $product=Products::where('id',$id)->first();
  $mor=MoreImages::where('product_id',$id)->get();

  $category_id=$product->subcategory_id;
  $relpro=Products::where('subcategory_id',$category_id)->get();

  $subcategory=SubCategory::all();
  //dd($product);
return view('Product.single')->withcat($category)->withproduct($product)->withsub($subcategory)->withrel($relpro)->withmor($mor);
}
public function subcategoryProduct($id){
$product=Products::all();
$category=Category::all();
$subcategory=SubCategory::all();
$side=SubCategory::where('id',$id)->first();
$sidcat=Category::where('id',$side->category_id)->first();
$sidesub=SubCategory::where('category_id',$sidcat->id)->get();
$allsubproduct=Products::where('subcategory_id',$id)->paginate(8);


        return view('Product.product')->withcat($category)->withsub($subcategory)->withproduct($allsubproduct)->withsidecat($sidcat->name)->withsidesub($sidesub);

}


    public function create($id){
$product=null;
    	return view('Product.create')->withsubcategory_id($id)->withproduct($product);
    }
//changer here for catproduct
    public function store(Request $request){
// $product=new product();

  $product=new Products();  
  if($request['status']==1){

    		$product->featured=1;
    	}else{
    		$product->featured=0;
    	} 
$product->name=$request['name'];
$product->price=$request['price'];
$product->color=$request['color'];
$product->code=$request['code'];
$product->size=$request['size'];

//$product->size=$request['size'];
$product->description=$request['description'];
//$product->category_id=$request['subcategory_id'];
$product->subcategory_id=$request['subcategory_id'];

if(input::hasfile('images'))
{

    $file=input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $product->image=$file->getClientOriginalName();
}

    $product->save();
     Session::flash('flash_message', 'Product successfully added!');
   
     
     return redirect()->back();


    }
    //for admin yajra products

     public function dataProducts(){

 $users = Products::select('id','name','color','size','code')->get();

        return Datatables::of($users)
->addColumn('action', function ($user) {
                return '
 <a href="'.route('edit.product',$user->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="'.route('delete.product',$user->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>

                <a href="'.route('add.more',$user->id).'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> Add More</a>

                 <a href="'.route('manage.more',$user->id).'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-wrench"></i> Manage</a>

                '
                ;
            })

        ->make(true);

    }

    public function editProduct($id){

$pr=Products::where('id',$id)->first();
return view('Product.create')->withproduct($pr);
    }

     public function addMoreImages($id){


return view('Product.add_more_images')->withproduct_id($id);


    }
public function storeMoreImages(Request $request){
// $product=new product();
  $product=new MoreImages();   
$product->name=$request['name'];

//$product->size=$request['size'];

//$product->category_id=$request['subcategory_id'];
$product->product_id=$request['product_id'];

if(Input::hasfile('images'))
{

    $file=Input::file('images');

    $file->move(public_path().'/',$file->getClientOriginalName());
    $product->image=$file->getClientOriginalName();
}

    $product->save();
     Session::flash('flash_message', 'Product successfully added!');
   
     
     return redirect()->back();


    }
public function manageMore($id){

$mor=MoreImages::where('product_id',$id)->get();
return view('Product.list_more_images')->withmor($mor);

}
public function deleteMoreImages($id){
$im=MoreImages::where('id',$id)->first();
$im->delete();
     Session::flash('flash_message', 'deleted successfully added!');

return back();

}



}
