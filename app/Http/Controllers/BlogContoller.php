<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Comment;

class BlogContoller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createComent($id, Request $req)
    {

        $comment = $req->input('comment_text');

        Comment::insert([
            'comment' => $comment,
            'blog_id' => $id
        ]);

        $datas = Blog::where('id', '=', $id)->first();
        $comennts = $datas->comments;


        $view_data = [
            'post' => $datas,
            'comments' => $comennts
        ];


        return view('blog.detail', $view_data);
    }
    public function index()
    {
        $datas = Blog::get();
        $model_data = [
            'posts' => $datas,
        ];
        // Mengirimkan data model ke view 'blog.index'
        return view('blog.index', $model_data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $kategori = $request->input('kategori');
        $imgUrl = $request->input('imgUrl');


        Blog::insert([
            'title' => $title,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'imgUrl' => $imgUrl,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("y-m-d H:i:s")
        ]);


        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = Blog::where('id', '=', $id)->first();
        $comennts = $datas->comments;


        $view_data = [
            'post' => $datas,
            'comments' => $comennts
        ];
        return view('blog.detail', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Blog::select('id', 'title', 'kategori', 'deskripsi', 'imgUrl', 'updated_at')->where('id', '=', $id)->first();



        $model = [
            'post' => $data
        ];
        return view('blog.update', $model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $kategori = $request->input('kategori');
        $imgUrl = $request->input('imgUrl');



        Blog::where('id', '=', $id)->update([
            'title' => $title,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'imgUrl' => $imgUrl,
            'updated_at' => date("y-m-d H:i:s")
        ]);


        return redirect('edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id', '=', $id)->delete();

        return redirect('blogs');
    }

    public function editPages()
    {
        $posts = Blog::get();
        $model = [
            'posts' => $posts
        ];
        return view('blog.edit', $model);
    }
}
