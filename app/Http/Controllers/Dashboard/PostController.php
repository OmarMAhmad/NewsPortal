<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::OrderBy('id', 'desc')->paginate(10);     // OrderBy('id', 'desc')->get();
        return view('Admin.post.manage_posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.post.add_post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required | string',
            'details' => 'required | string',
            'description' => 'required | string',
            'category_id' => 'required | integer',
            'image' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $post = new post();
        $post->title = $request->title;
        $post->details = $request->details;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
// ------------------- Start Posts Images ------------------- //
        $post_image = $request->file('image');
        $file_name = $post->title.' '.time().'.'.$post_image->extension();
        $post_image->move('images/PostImages', $file_name);
        $post->image = 'images/PostImages/'.$file_name;
// ------------------- End Posts Images ------------------- //
        $post->save();
        return redirect('admin/post')->with('success', 'The Post Has Been Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = Category::all();
        return view('Admin.post.edit_post', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required | string',
            'details' => 'required | string',
            'description' => 'required | string',
            'category_id' => 'required | integer',
            'image' => 'required | image'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $post->title = $request->title;
        $post->details = $request->details;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
// ------------------- Start Posts Images ------------------- //
        $post_image = $request->file('image');
        $file_name = $post->title.' '.time().'.'.$post_image->extension();
        $post_image->move('images/PostImages', $file_name);
        $post->image = 'images/PostImages/'.$file_name;
// ------------------- End Posts Images ------------------- //
        $post->save();
        return redirect('admin/post')->with('success', 'The Post Has Been Successful Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect('admin/post')->with('success', 'The Post Has Been Successfully Deleted');
    }
}
