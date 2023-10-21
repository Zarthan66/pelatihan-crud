<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Create data post
    public function simpan(Request $request)
    {
        // validasi
        $this->validate($request, [
            'title' => 'required',
            'deskripsi' => 'required',
        ]);

        //query simpan
        Post::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('post.tampil')->with('success', 'Berhasill menambahkan data');
    }

    // Read data post
    public function tampil()
    {
        //query get data table post
        $data = Post::orderBy('id', 'ASC')->get();

        return view('post.index', compact('data'));
    }
    // update data post

    // delete data post
}
