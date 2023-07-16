<?php

namespace App\Http\Controllers;

use App\Models\aplikasi;
use Illuminate\Http\Request;


class userController extends Controller
{
    public function index()
    {
        // $aplikasis = aplikasi::find($id);
        // return view('user.dashboard.index', ['aplikasi' => $aplikasis]);
        return view('user.dashboard.index', [
            'name' => 'name',
            'image' => 'image',
            'aplikasi' => aplikasi::all()
        ]);
        // return view('dashboard.show', [
        //     'name' => $aplikasis->name,
        //     'aplikasi' => $aplikasis
        // ]);
    }
    // public function show($id)
    // {
    //     // $aplikasis = aplikasi::find($id);
    //     // return view('user.dashboard.index', ['aplikasi' => $aplikasis]);
    //     return view('dashboard.show', [
    //         'aplikasi' => aplikasi::find($id)
    //     ]);
    //     // return view('dashboard.show', [
    //     //     'name' => $aplikasis->name,
    //     //     'aplikasi' => $aplikasis
    //     // ]);
    // }
    public function show($id)
    {
        $aplikasis = aplikasi::find($id);
        return view('user.dashboard.show', ['aplikasi' => $aplikasis]);
        // return view('dashboard.show', ['aplikasi' => $aplikasis]);
        // return view('dashboard.show', [
        //     'name' => $aplikasis->name,
        //     'aplikasi' => $aplikasis
        // ]);
    }
}
