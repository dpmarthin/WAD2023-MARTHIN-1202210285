<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($conn, $data) {
        $id = $data["id"];
        $nama_mobil = $data["nama_mobil"];
        $brand_mobil = $data["brand_mobil"];
        $warna_mobil = $data["warna_mobil"];
        $tipe_mobil = $data["tipe_mobil"];
        $harga_mobil = $data["harga_mobil"];
    }
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query = mysqli_query($conn, "UPDATE showroom_mobil SET nama_mobil = '$nama_mobil', brand_mobil = '$brand_mobil', warna_mobil = '$warna_mobil', tipe_mobil = '$tipe_mobil', harga_mobil = '$harga_mobil' WHERE id=$id");
        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        if($query){
            echo "<script>alert('Data berhasil diubah')</script>";
            header ("location:list_mobil.php");
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else {
            echo "<script>alert('Data gagal dihapus')</script>";
            header ("location:list_mobil.php");
        }
    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
$conn -> close();
?>