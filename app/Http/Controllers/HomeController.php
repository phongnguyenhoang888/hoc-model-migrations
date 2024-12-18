<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cauthu; // phuong thuc goi model 
use Termwind\Components\Dd;
use App\Http\Requests\addRequest;

use App\Http\Requests\editRequest;
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
         // lay data
          $data = Cauthu::all();
          // $data_cauthu  = DB::table('cauthu')->get();
           //$data_cauthu  =$data_cauthu  ->toArray();
           
           // trả về view
           return view('list', compact('data'));
        }
        
      
        //return view('home');
}
