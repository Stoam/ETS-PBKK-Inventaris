<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::where('user_id', auth()->user()->id)->get();
        return view('barang.dashboard', ['barangs' => $barangs]);
    }

    public function show()
    {
        $barangs = Barang::paginate(5);
        return view('barang.show', ['barangs' => $barangs]);
    }


    public function detail($id)
    {
        $barang = Barang::find($id);

        if(!$barang){
        }
        return view('barang.detail', ['barang' => $barang]);
    }

    public function edit($id)
    {
        $barang = Barang::find($id);

        if(!$barang){
            return redirect()->route('barang.dashboard')->with('error', 'Barang not found');
        }
        return view('barang.edit', ['barang' => $barang]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|string|max:255',
            'kondisi' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'kecacatan' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048'
        ]);

        $imagePath = $request->file('gambar')->store('barangs', 'public');
        $validatedData['gambar'] = $imagePath;

        $validatedData['user_id'] = auth()->user()->id;

        Barang::create($validatedData);

        return redirect(route('barang.dashboard'))->with('success-c', 'barang added successfully.');
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        if(!$barang){
            return redirect()->route('barang.dashboard')->with('error', 'Barang not found');
        }
        $validatedData = $request->validate([
            'jenis' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'kecacatan' => 'required',
            'jumlah' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:10048',
            ]);
            $imagePath = $request->file('gambar')->store('barangs', 'public');
            $barang->image = $imagePath;
        }
        $barang->jenis = $validatedData['jenis'];
        $barang->kondisi = $validatedData['kondisi'];
        $barang->keterangan = $validatedData['keterangan'];
        $barang->kecacatan = $validatedData['kecacatan'];
        $barang->jumlah = $validatedData['jumlah'];

        $barang->save();

        return redirect()->route('barang.dashboard')->with('success-u', 'Barang updated successfully');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);

        if(!$barang){
        }
        $barang->delete();
        return redirect(route('barang.dashboard'))->with('success-d', 'Barang deleted successfully');
    }
}
