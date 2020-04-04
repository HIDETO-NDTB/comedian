<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //form-validation
           $this->validate($request,[
            'name'=>'required',            //validateはどのクラスのmethod
            'description'=>'required',      //もしここで足りていなければどうなるのか？
            'comment'=>'required',
            'image'=>'required|image'   //なぜこんな書き方？

        ]);

        //store into db
       $featured = $request->image;
       $featured_new_name = time().$featured->getClientOriginalName();//get filename



       //$featured->move('uploads\posts',$featured_new_name);
       Storage::disk('public')->put($featured_new_name,file_get_contents($featured));


       //Mass Assignment
       $post=Post::create([
        'name'=>$request->name,
        'slug'=>str_slug($request->name),
        'description'=>$request->description,
        'image'=>$featured_new_name, //?
        'comment'=>$request->comment,
        'user_id'=>$request->user_id,
    ]);


    //return redirect
    return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
