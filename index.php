<?php
// membuat koneksi ke database
$koneksi = mysqli_connect('localhost','root','','pwebcrud');

// mengecek apakah koneksi berhasil

// melakukan query ke database, misalnya mencoba menampilkan semua data dari tabel
$query = mysqli_query($koneksi, "SELECT * FROM crud");
if ($query) {
    // Loop untuk menampilkan data dalam tabel
// mengecek apakah query berhasil

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-600">

    <!-- Sidebar -->
    <div class="bg-gray-800 w-24 fixed top-10 bottom-10 flex flex-col items-center justify-items-start rounded-xl">
        <ul class="mt-6">
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Akun</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">About</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Services</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Contact</button>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="ml-24 mt-6 p-6">
        <h1 class="text-2xl font-bold mb-4 text-white">Dashboard</h1>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Ukuran</th>
                        <th class="border px-4 py-2">No HP</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['username'] . "</td>"; // Ganti 'id' dengan nama kolom yang sesuai
                            echo "<td>" . $row['ukuran'] . "</td>"; // Ganti 'phone_number' dengan nama kolom yang sesuai
                            echo "<td>" . $row['nomor_hp'] . "</td>"; // Ganti 'name' dengan nama kolom yang sesuai
                            echo "<td>";
                            echo "<button>Edit</button>";
                            echo "<button>Delete</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="form.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah data</a>
        </div>
    </div>

</body>
</html>
<?php 
} else {
    // Tampilkan pesan jika query tidak berhasil dieksekusi
    echo "Query failed: " . mysqli_error($koneksi);
}
?>