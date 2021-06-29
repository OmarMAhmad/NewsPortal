<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ShowDashboard() {
        $users = User::count();
        $posts = post::count();
        $categories = Category::count();
        $comments = Comment::count();
        return view('Admin.Dashboard', compact('users', 'posts', 'categories', 'comments'));
    }
}
