<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * Hiển thị danh sách các bài post
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     * Hiển thị form để tạo nội dung bài post mới
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * hiển thị form để tạo bài viết
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | min:3',
            'content' => 'required'
        ]);

        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();

        return redirect('/posts/create')->with('success', 'Tạo mới thành công');
        // Thông thường, điều này được thực hiện sau khi thực hiện thành công hay
        //  thất bại một hành động nào đó và bạn muốn gửi thông báo kèm theo redirect response.
    }

    /**
     * Display the specified resource.
     * hiển thị bài viết chi tiết
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('posts.detail', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     * hiển thị form để chỉnh sửa
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     * hiển thị form để update
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $this->validate($request, [
            'title' => 'required | min:3',
            'content' => 'required'
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts')->with('success', 'chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'xóa thành công');
    }
}
