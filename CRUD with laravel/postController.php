<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\Post;

class postController extends Controller
{
    public function displayForm()
    {
        return view('PostForm');
    }

    public function insertData(Request $request)
    {
        $post = new Post();
        $post->post_title = $request->ptitle;
        $post->post_content = $request->pcontent;
        $post->save();

        return redirect('/posts/table');
    }

    public function showData()
    {
        $pst = Post::all();
        return view('postsTable', compact('pst'));
    }

    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('postsUpdateForm', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->post_title = $request->ptitle;
        $post->post_content = $request->pcontent;
        $post->save();
        return redirect('/posts/table');
    }

    public function delete(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts/table');
    }
}
