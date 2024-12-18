<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Cauthu; // phuong thuc goi model 
use Termwind\Components\Dd;
use App\Http\Requests\addRequest;

use App\Http\Requests\editRequest;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function index_list(){
        // lay data
        $data = Cauthu::all();
       // $data_cauthu  = DB::table('cauthu')->get();
        //$data_cauthu  =$data_cauthu  ->toArray();
        
        // trả về view
        return view('list', compact('data'));
     }
     

     public function add(){
        return view('/add');
     }
    public  function insert(editRequest $request){

        
        
            $lay_dulieu_form =[
                'ten_cau_thu' => $request->input('ten_cau_thu'),
               'tuoi' => $request->input('tuoi'),
                'email' => $request->input('email'),
                'vi_tri' => $request->input('vi_tri'),
                'quoc_tich' => $request->input('quoc_tich'),
               'luong' => $request->input('luong'),
            ];


         if(cauthu::insert($lay_dulieu_form)){
            echo "them thanh cong";
         }
            return redirect('/list');

    }
    /**
     * Show the form for creating a new resource.
     */


     //
     public function edit($id)
     {
         // Lấy thông tin cầu thủ theo ID
       // $datacauthu_edit = DB::table('cauthu')->where('id', $id)->first();
       $datacauthu_edit = cauthu::where('id', $id)->first();
         // Kiểm tra nếu không tìm thấy cầu thủ
        
     
         // Truyền dữ liệu sang view
         return view('Edit', compact('datacauthu_edit'));


     }
     
     public function update(addRequest $request,$id)
     {
       $cauthu= cauthu::findOrFail($id);
      
        $data_update = $request->all();
       

        //dd($data_update);
        ////exit;
        if ($cauthu->update($data_update)) {
            echo "thanhcong";
             return redirect('/list')->with('success', 'Cập nhật thành công!');
        } else {
            echo "thatbai";
             return redirect('/list')->with('error', 'Cập nhật thất bại!');
        }
        
     }
   

    /**
     * Show the form for creating a new resource.
     */
    public function delete($id)
    {
        //
        cauthu::where('id',$id)->delete();
        return redirect('/list');

    }
     //
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.

     * Update the specified resource in storage.
     */
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
