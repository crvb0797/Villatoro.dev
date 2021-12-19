<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalPosts = Post::where('user_id', auth()->user()->id)->count();
        $publishedPosts = Post::where('user_id', auth()->user()->id)
            ->where('status', Post::PUBLICADO)
            ->count();
        $noPublishedPosts = Post::where('user_id', auth()->user()->id)
            ->where('status', Post::BORRADOR)
            ->count();


        /* Infrome general */
        $totalPostsGeneral = Post::all()->count();
        $publishedPostsGeneral = Post::all()
            ->where('status', Post::PUBLICADO)
            ->count();
        $categories = Category::all()->count();
        $tags = Tag::all()->count();
        $users = User::all()->count();

        $posts = Post::where('status', Post::PUBLICADO)
            ->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months_posts = Post::where('status', Post::PUBLICADO)
            ->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');

        $datas_posts = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months_posts as $index => $month_post) {
            $datas_posts[$month_post - 1] = $posts[$index];
        }


        /* Post del usuario */
        $posts_user = Post::where('user_id', auth()->user()->id)
            ->where('status', Post::PUBLICADO)
            ->select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months_posts_user = Post::where('user_id', auth()->user()->id)
            ->where('status', Post::PUBLICADO)
            ->select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');

        $datas_posts_user = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months_posts_user as $index => $month_post_user) {
            $datas_posts_user[$month_post_user - 1] = $posts_user[$index];
        }


        /* Usuarios */
        $usersRegister = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $monthsUsers = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');

        $datas_users = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($monthsUsers as $index => $monthUser) {
            $datas_users[$monthUser - 1] = $usersRegister[$index];
        }

        return view('admin.index', compact('totalPosts', 'publishedPosts', 'noPublishedPosts', 'totalPostsGeneral', 'publishedPostsGeneral', 'users', 'categories', 'tags', 'datas_posts', 'datas_posts_user', 'datas_users'));
    }
}
