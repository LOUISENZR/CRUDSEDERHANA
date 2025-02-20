<!DOCTYPE html> 
<html> 
<head> 
    <title>Add Item</title> <!-- Judul halaman -->
</head> 
<body> 

    <h1>Add Item</h1> <!-- Judul utama halaman -->

    <!-- Form untuk menambahkan item baru -->
    <form action="{{ route('item.store') }}" method="POST"> 
        @csrf <!-- Token CSRF untuk keamanan form -->

        <!-- Input untuk nama item -->
        <label for="name">Name: </label> 
        <input type="text" name="name" required> <!-- Kolom input nama (wajib diisi) -->
        <br> 

        <!-- Textarea untuk deskripsi item -->
        <label for="description">Description: </label> 
        <textarea name="description" required></textarea> <!-- Kolom deskripsi (wajib diisi) -->
        <br> 

        <!-- Tombol submit untuk menambahkan item -->
        <button type="submit">Add Item</button> 
    </form> 

    <!-- Link untuk kembali ke daftar item -->
    <a href="{{ route('item.index') }}">Back to List</a> 

</body> 
</html>
