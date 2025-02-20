<!DOCTYPE html> 
<html> 
<head> 
    <title>Edit Item</title> <!-- Judul halaman -->
</head> 
<body> 

    <h1>Edit Item</h1> <!-- Judul utama halaman -->

    <!-- Form untuk mengedit item -->
    <form action="{{ route('item.update', $item) }}" method="POST"> 
        @csrf <!-- Token CSRF untuk keamanan form -->
        @method('PUT') <!-- Spoofing method HTTP PUT untuk update data -->

        <!-- Input untuk mengedit nama item -->
        <label for="name">Name:</label> 
        <input type="text" name="name" value="{{ $item->name }}" required> <!-- Pre-fill dengan data lama -->
        <br> 

        <!-- Textarea untuk mengedit deskripsi item -->
        <label for="description">Description:</label> 
        <textarea name="description" required>{{ $item->description }}</textarea> <!-- Pre-fill dengan data lama -->
        <br> 

        <!-- Tombol untuk submit form update -->
        <button type="submit">Update Item</button> 
    </form> 

    <!-- Link untuk kembali ke daftar item -->
    <a href="{{ route('item.index') }}">Back to List</a> 

</body> 
</html>
