<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index(Request $req)
    {
        if (!empty($req->search)) {

            $data = \App\Models\Data::where('nama_barang', 'like', '%req->search%')->get();
            return view("page.index", compact('data'));
        } else {

            $data = \App\Models\Data::all();

            return view("page.index", compact('data'));
        }
    }

    public function create()
    {
        return view("page.create");
    }

    public function store(Request $req)
    {
        $req->validate([
            "nama"          => "required|min:4|max:25",
            "no_hp"         => "required|min:10|max:12",
            "nama_barang"   => "required|min:3",
            "deskripsi"     => "required"
        ]);

        $data =   \App\Models\Data::create([
            "nama"          =>  $req->nama,
            "no_hp"         =>  $req->no_hp,
            "nama_barang"   =>  $req->nama_barang,
            "deskripsi"     =>  $req->deskripsi
        ]);

        session()->flash("status", "Create Data Success");

        // $data->nama         = $req->nama;
        // $data->no_hp        = $req->no_hp;
        // $data->nama_barang  = $req->nama_barang;
        // $data->deskripsi    = $req->deskripsi;
        // $data->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $item = \App\Models\Data::find($id);

        session()->flash("status", "Edit Data Success");

        return view("page.edit", compact('item'));
    }

    public function update(Request $req, $id)
    {
        $item = \App\Models\Data::find($id);
        $item->nama         =   $req->nama;
        $item->no_hp        =   $req->no_hp;
        $item->nama_barang  =   $req->nama_barang;
        $item->deskripsi    =   $req->deskripsi;
        $item->save();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $item = \App\Models\Data::find($id);
        $item->delete();

        session()->flash("status", "Delete Data Success");
        return redirect()->route('index');
    }
}
