<?php

namespace App\Http\Controllers;

use \Illuminate\Support\facades\DB;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    
    public function getD(Request $request)
    {
        global $shivam;
       $shivam = DB::table('task')->select('email')->get();
    //    print_r($shivam);
        // foreach($shivam as $value)
        // {
        //   // print_r($value->email);
        //    if($value->email=="td@gmail.com")
        //    {
        //        echo "Success<br>";
        //        echo $value->pass;
        //        //return redirect('Profile');
        //    } 
        // }
          
    }
    public function check(Request $request)
    {
        
       // print_r($request->email);
        $use = $request->email;
        echo $use;
       // print_r(DB::table('task')->select('email')->get());
        $loop = DB::table('task')->select('email')->get();

        foreach($loop as $val=>$s)
        {
           print_r($val." : ".$s);
        }
        // if((DB::table('task')->select('email')->get())=='td@gmail.com')
        //     echo "Success";
            // if($shivam==$request->email)
            // {
            //     echo "Success";
            //     exit;
            // }
        //echo "Check function";
    }
}
