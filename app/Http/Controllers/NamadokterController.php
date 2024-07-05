<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Category;
use App\Models\namadokter;
use Illuminate\Http\Request;

class NamadokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource
     * */
    public function index()
    {


        $data = namadokter::with('category')->get();

        return view('namadokter.index', compact('data'));
    }

    public function create()
    {
        // select * from categories
        $categories = Category::orderBy('id', 'desc')->get();
        return view('namadokter.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert into
        namadokter::create($request->all());
        toast('Data Berhasil Ditambah', 'success');
        return redirect()->to('namadokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // select * from barangs where id = $id
        $edit = namadokter::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('namadokter.edit', compact('edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        namadokter::where('id', $id)->update([
            'name_barang' => $request->name_barang,
            'id_category' => $request->name_category,
            'qty' => $request->qty,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
        ]);

        toast('Data Berhasil di ubah', 'success');
        return redirect()->to('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        namadokter::where('id', $id)->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect()->to('namadokter');
    }
}