<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\post;
use App\User;

class FrontEndController extends Controller
{
    public function index(){
        $posts = post::orderBy('created_at','desc')->get();

        return view('index')->with('posts',$posts);
    }

    public function categoryranking(){
        $rankings = post::withCount('favorite_users')->orderBy('favorite_users_count','desc')->get();

        return view('category.categoryranking')->with('rankings',$rankings);
    }

    public function categorynewpost(){
        return view('category.categorynewpost')->with('users',User::all());
    }

    public function categorystorepost(Request $request){
        return view('index');
    }

    public function categoryaboutsite(){
        return view('category.categoryaboutsite');
    }
    //public function user_login(){
    //    return view('auth.login');
    //}
    //public function new_user_login(){
    //    return view('auth.login');
    //}
    //public function user_register(){
    //    return view('auth.register');
    //}
    //public function new_user_register(){
    //   return view('auth.register');
    //}






    public function front(){
        return view('front');
    }
}
