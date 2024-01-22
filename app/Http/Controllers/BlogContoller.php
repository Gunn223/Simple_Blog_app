<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $datas = DB::table('feb_blog')->get();
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


        DB::table('feb_blog')->insert([
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
        $datas = DB::table('feb_blog')->where('id', '=', $id)->first();

        $view_data = [
            'post' => $datas,
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
