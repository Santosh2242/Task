<?php

namespace App\Http\Controllers;
use \Illuminate\Support\facades\DB;
use Illuminate\Http\Request;


class sendData extends Controller
{

   
    public function store(Request $request)
    {
        $fileName = $request->file('img')->getClientOriginalName();  
        
        $file_name = $request->file('certificate')->getClientOriginalName();  

        $sk=$request->php." ".$request->mysql." ".$request->node_js." ".$request->laravel;
        if($request->pass==$request->cpass){
        $string = DB::table('task')->insert([    
        
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'skills'=>$sk,
            'mobile'=>$request->mobile,
            'aadhar'=>$request->aadhar,
            'gender'=>$request->gender,
            'pass'=>$request->pass,
            'role'=>$request->role,
             //'aadharUploads'=>$request->file('img')->store('Uploads')
             'aadharUploads'=> $request->file('img')->move(('uploads'), $fileName),
             'certificate'=> $request->file('certificate')->move(('uploads'), $file_name)
        
        ]);
        
    }
    else{
        return redirect('/registration');
    }
       return redirect('/list');
        
    }






    public function show()
    {
       $user = DB::table('task')->get();
        return view('userList',['user'=>$user]);
    }
    public function del($id){
        DB::delete('delete from task where id=?',[$id]);
        return redirect('/list');
    }
    public function edit($id)
    {
        $data =  DB::table('task')->find($id);
        return view('Update', compact('data'));
    }
    public function update(Request $request,$id)
    {
       $data = DB::table('task')->where('id',$id)->update(
           [
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'aadhar'=>$request->aadhar,
           ]);
       
       
      return redirect('/list');
    }
   
}
