<!DOCTYPE html> 
<html> 
<head> 
    <title>Item List</title> <!-- Judul halaman -->
</head> 
<body> 

    <h1>Items</h1> <!-- Judul utama halaman -->

    <!-- Menampilkan pesan sukses jika ada (misalnya setelah tambah/edit/hapus item) -->
    @if(session('success')) 
        <p>{{ session('success') }}</p> 
    @endif 

    <!-- Link untuk menuju halaman tambah item -->
    <a href="{{ route('item.create') }}">Add Item</a> 

    <ul> 
        <!-- Loop untuk menampilkan semua item -->
        @foreach ($items as $item) 
            <li> 
                {{ $item->name }} <!-- Menampilkan nama item -->
                - 
                
                <!-- Link untuk mengedit item -->
                <a href="{{ route('item.edit', $item) }}">Edit</a> 

                <!-- Form untuk menghapus item -->
                <form action="{{ route('item.destroy', $item) }}" method="POST" style="display:inline;"> 
                    @csrf <!-- Token CSRF untuk mencegah serangan CSRF -->
                    @method('DELETE') <!-- Spoofing method HTTP DELETE -->
                    <button type="submit">Delete</button> <!-- Tombol hapus item -->
                </form> 
            </li> 
        @endforeach 
    </ul> 

</body> 
</html>
