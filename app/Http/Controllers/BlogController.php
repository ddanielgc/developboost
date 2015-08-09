<?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        //$layout = $tag ? Tag::layout($tag) : 'blog.layouts.site';

        return view('blog.index', $data);
    }


    public function home(Request $request)
    {

        //$tag = $request->get('tag');

        $data = $this->dispatch(new BlogIndexData(null));

        return view('blog.home', $data);
    }


    public function posts(Request $request)
    {
        /*
         *
         $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        */

        $tag = $request->get('tag');

        $data = $this->dispatch(new BlogIndexData($tag));

        $layout = $tag ? Tag::layout($tag) : 'blog.layouts.site';

        return view($layout, $data);
        //return view('blog.index', compact('posts'));
    }


    public function showPost(Request $request, $slug)
    {
        $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');

        if($tag) {
            $tag = Tag::whereTag($tag)->firstOrFail();
        }

        return view($post->layout, compact('post', 'tag'));
    }

}
