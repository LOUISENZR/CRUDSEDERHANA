<?php

use Illuminate\Support\Facades\Route; // Memanggil facade Route untuk mengatur routing
use App\Http\Controllers\ItemController; // Memanggil ItemController untuk meng-handle request terkait item

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di file ini, Anda dapat mendaftarkan semua route untuk aplikasi web.
| Route di sini akan dikelola oleh RouteServiceProvider dan menggunakan
| middleware "web" secara default.
|
*/

Route::get('/', function () { // Route untuk halaman utama ('/')
    return view('welcome'); // Menampilkan view 'welcome.blade.php'
});

Route::resource('item', ItemController::class); 
// Membuat semua route resourceful untuk 'item' (CRUD)
// Route yang di-generate otomatis oleh Route::resource:
// GET    /item           → index()   → Menampilkan semua item
// GET    /item/create    → create()  → Menampilkan form tambah item
// POST   /item           → store()   → Menyimpan data item baru
// GET    /item/{id}      → show()    → Menampilkan detail item
// GET    /item/{id}/edit → edit()    → Menampilkan form edit item
// PUT    /item/{id}      → update()  → Mengupdate data item
// DELETE /item/{id}      → destroy() → Menghapus item
