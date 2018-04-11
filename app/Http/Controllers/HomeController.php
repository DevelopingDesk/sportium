<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use yajra\Datatables\Datatables;
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
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
$user=User::where('id',$id)->first();
$user->delete();
return back();


    }
    public function index()
    {
        

        return view('home');
    }
    public function data(){

$users=User::select('id','name','email','created_at','updated_at')->get();
//dd($users);
 return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="'.route('datatables.delete',$user->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
            })
           
            ->make(true);

    }
}
