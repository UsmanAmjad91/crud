<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function add(Request $req){

       $member = new Member;
       $member->username=$req->username;
       $member->email=$req->email;
       $member->password=$req->password;
      $member->save();

      return redirect('list');

    }
    public function show(){
   
        $data = Member::all();

        return view('list',['members'=>$data]);

    }
}
