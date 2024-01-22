<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menggunakan Storage untuk membaca file posts.txt
        $postsContent = Storage::get('posts.txt');

        // Memisahkan setiap baris dalam file
        $posts = explode("\n", $postsContent);

        $postsArray = array();

        // Iterasi melalui setiap baris dan memecahnya berdasarkan koma
        foreach ($posts as $post) {
            $postArray = explode(',', $post);

            // Memasukkan array hasil pecahan ke dalam array $postsArray
            $postsArray[] = $postArray;
        }

        // Menyusun data model untuk dikirimkan ke view
        $model_data = [
            'posts' => $postsArray,
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


        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);

        $newPost = [
            // gunakan cara yang kebih baik dari ini
            count($posts) + 1,
            $title,
            $kategori,
            $deskripsi,
            $imgUrl,
            date('Y-m-d H:i:s')
        ];

        $new_post = implode(',', $newPost);

        array_push($posts, $new_post);
        $posts = implode("\n", $posts);

        Storage::write('posts.txt', $posts);

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
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        $selected_post = array();
        foreach ($posts as $post) {
            $post = explode(",", $post);

            if ($post[0] == $id) {
                $selected_post = $post;
            }
        }
        $view_data = [
            'post' => $selected_post
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
