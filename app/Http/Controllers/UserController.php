<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $user = User::all();
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
  
        return $user;
    }

  
  public function update(Request $request, User $user,$id)
    {
         $user = User::find($id);
        $user-> name =$request-> get("name");
        $user-> last_name =$request-> get("last_name");
        $user-> identification =$request-> get("identification");
        $user-> email =$request-> get("email");
        $user-> number =$request-> get("number");
        $user-> numberHouse =$request-> get("numberHouse");
        $user-> longitude =$request-> get("longitude");
        $user-> latitude =$request-> get("latitude");
        $user ->save();
        return $user;
    }
    
    public function destroy($id)
    {
        $user = User::find($id);
               $user->delete();
       
       
               return "elimnado con exito !";
  
    }
}