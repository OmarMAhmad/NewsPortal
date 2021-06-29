<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontSiteController extends Controller
{
// =================== Show Home Page (View The List 10 Posts) =================== //
    public function ShowHome(){
        $posts = post::OrderBy('id', 'desc')->paginate(10);
        $categories = Category::all();
        return view('FrontSite.Home', compact('posts', 'categories'));
    }

// =================== Show About Page (View All Posts) =================== //
    public function ShowAbout(){
        $posts = post::OrderBy('id', 'desc')->paginate(20);
        return view('FrontSite.About', compact('posts'));
    }

// =================== Show Category Page (View All Posts Belonging To This Category) =================== //
    public function ShowCategory($category){
        $categories = Category::all();
        $posts = post::where('category_id', '=', $category)->get();
        return view('FrontSite.Category', compact('posts', 'categories', 'category'));
    }

// =================== Show Details Page (View The Details Of This Post) =================== //
    public function ShowDetails($post){
        $categories = Category::all();
        $posts = post::OrderBy('id', 'desc')->paginate(10);
        $post = post::find($post);
        return view('FrontSite.Details', compact('post', 'posts', 'categories'));
    }

// =================== Show Search Page (Find Posts That Contains This Word) =================== //
    public function ShowSearch(Request $request){
        $words = $request->search;
        $posts = DB::table('posts')
            ->where('title', 'like', '%' . $words . '%', 'or', 'details', 'like', '%' . $words . '%')
            ->get();
//        dd($posts->toArray());
        return view('FrontSite.Search', compact('words', 'posts'));
    }

// =================== Show Contact Page (View Pages Contact Us) =================== //
    public function ShowContact(){
        return view('FrontSite.Contact');
    }

// =================== Show Contact Page (On This Page, You Can Send A Comment About The Site) =================== //
    public function SendContact(Request $request){
        $rules = [
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | email',
            'massage' => 'required | string',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $contact = new Comment();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect('contact')->with('success', 'The Comment Has Been Added Successful');
    }
}
