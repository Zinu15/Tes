<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProductController extends Controller
{
    public function index()
    {
        return view('profile.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = Barang::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img/',$request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/profile');
    }
        
}