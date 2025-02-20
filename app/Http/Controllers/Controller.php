<?php

namespace App\Http\Controllers;

use App\Models\Item; // Memanggil model Item
use Illuminate\Http\Request; // Memanggil class Request untuk meng-handle data form

class ItemController extends Controller {

    // Method untuk menampilkan semua data item
    public function index() {
        $item = Item::all(); // Mengambil semua data dari tabel 'items'
        return view('item.index', compact('items')); // Mengirim data ke view 'item.index'
    }

    // Method untuk menampilkan form tambah item
    public function create() {
        return view('item.create'); // Mengarahkan ke halaman form tambah item
    }

    // Method untuk menyimpan data item baru ke database
    public function store(Request $request) {
        // Validasi data input
        $request->validate([
            'name' => 'required', // Kolom 'name' wajib diisi
            'description' => 'required', // Kolom 'description' wajib diisi
        ]);

        // Menyimpan data item baru ke database
        item::create($request->only(['name', 'description'])); // (Catatan: "item" harus "Item")

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Item added successfully');
    }

    // Method untuk menampilkan detail item tertentu
    public function show(Item $item) {
        return view('item.show', compact('item')); // Mengirim data item ke view 'item.show'
    }

    // Method untuk menampilkan form edit item
    public function edit(Item $item) {
        return view('item.edit', compact('item')); // Mengirim data item ke view 'item.edit'
    }

    // Method untuk mengupdate data item
    public function update(Request $request, Item $item) {
        // Validasi data input
        $request->validate([
            'name' => 'required', // Kolom 'name' wajib diisi
            'description' => 'required', // Kolom 'description' wajib diisi
        ]);

        // Mengupdate data item di database
        $item->update($request->only(['name', 'description']));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Item updated successfully');
    }

    // Method untuk menghapus item dari database
    public function destroy(Item $item) {
        $item->delete(); // Menghapus item dari database

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Item deleted successfully');
    }
}
