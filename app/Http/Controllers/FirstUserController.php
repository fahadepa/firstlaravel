<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\FirstUser;
class FirstUserController extends Controller
{
    public function store(Request $request){
        $data=$request;
        FirstUser::add($data);
        return view('saveuser');
    }
    public function index(){
        try{
          $user= FirstUser::index();
            return view('userview',['first_users'=>$user]);
        }catch(\Exception $exception){
            return $exception->getMessage();
        }

}
}