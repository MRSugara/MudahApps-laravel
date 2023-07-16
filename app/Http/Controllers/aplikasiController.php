<?php

namespace App\Http\Controllers;

use App\Models\aplikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;




class aplikasiController extends Controller
{
    public function index()
    {
        $aplikasis = aplikasi::all();
        return view('dashboard.dashboard', ['aplikasi' => $aplikasis]);
    }
    public function create()
    {
        $aplikasis = aplikasi::all();
        return view('dashboard.create', ['aplikasi' => $aplikasis]);
    }
    public function edit($id)
    {
        $aplikasis = aplikasi::find($id);
        return view('dashboard.edit', compact('aplikasis'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'body' => 'required',
            'version' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // ubah nama file
        $imageName = time() . '.' . $request->image->extension();

        // simpan file ke folder public/product
        Storage::putFileAs('post-images', $request->image, $imageName);

        $aplikasi = aplikasi::create([
            'name' => $request->name,
            'link' => $request->link,
            'version' => $request->version,
            'body' => $request->body,
            'image' => $imageName,
        ]);
        // $aplikasi = $request->validate([
        //     'name' => 'required',
        //     'link' => 'required',
        //     'image' => 'image|file',
        //     'body' => 'required',
        //     'version' => 'required',

        // ]);
        // if ($request->file('image')) {
        //     $aplikasi['image'] = $request->file('image')->store('post-images');
        // }

        // aplikasi::create($aplikasi);
        return redirect('/');
    }
    public function update(Request $request, $id)
    {
        // $aplikasis = aplikasi::where('id', $id)->update([
        //     'name' => $request->name,
        //     'image' => $request->image,
        //     'link' => $request->link,
        //     'version' => $request->version,
        // ]);
        if ($request->hasFile('image')) {
            // ambil nama file gambar lama dari database
            $old_image = aplikasi::find($id)->image;

            // hapus file gambar lama dari folder slider
            Storage::delete('post-images' . $old_image);

            // ubah nama file
            $imageName =  time() . '.' . $request->image->extension();

            // simpan file ke folder public/product
            Storage::putFileAs('post-images', $request->image, $imageName);

            // update data product
            aplikasi::where('id', $id)->update([
                'name' => $request->name,
                'link' => $request->link,
                'version' => $request->version,
                'body' => $request->body,
                'image' => $imageName,
            ]);
        } else {
            // update data product tanpa menyertakan file gambar
            aplikasi::where('id', $id)->update([
                'name' => $request->name,
                'link' => $request->link,
                'version' => $request->version,
                'body' => $request->body,
            ]);
        }


        return redirect('');
    }
    public function show($id)
    {
        $aplikasis = aplikasi::find($id);
        // return view('dashboard.show', ['aplikasi' => $aplikasis]);
        return view('dashboard.show', ['aplikasi' => $aplikasis]);
        // return view('dashboard.show', [
        //     'name' => $aplikasis->name,
        //     'aplikasi' => $aplikasis
        // ]);
    }
    public function destroy($id)
    {
        $aplikasi = aplikasi::find($id);
        $aplikasi->delete();

        return redirect('/');
    }
}
