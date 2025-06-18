<?php //untuk membuka, namanya delimiter yang dibawah, tag penutup di php (tag khusus php)
    
    //mengkoneksikan dengan database cara menhubungkan nya pake IPA interprice 

    // ada 4 parameter : localhost, username (root), password, nama database (di local host perhatikan port nya, kalo port default 3306 gini "localhost" kalo portnya beda bukan 3306 gini "localhost:8111" )
    //buat variabel dulu biar efektif ngoding pas if nya jd singkat (ini mirip class di css)
    //$koneksi = mysqli_connect("localhost:8111", "root", "", "webif");

    //cara mengecek kalo udh connect blm ke database
    //if(!$koneksi)
    //{
        //die("Koneksi Gagal!" .mysqli_connect_error());
    //}
    //else
    //{
        //echo "Koneksi Berhasil!";
    //}

    //$query = "SELECT * FROM mahasiswa";

    //$result = mysqli_query($koneksi, $query); //ini adalah objek 
    
    // echo gabisa menampilkan objek 
    // echo $result; *coding

    //cara ambil data dalemnya, namanya (fetch) dari lemari result
    // cara nya :
    // mysqli_fetch_row() untuk array tp numerik 
    // mysqli_fetch_assoc() ini buat asosiatif 
    // mysqli_fetch_array() bisa assos bisa row tp ada kendala klo ga manggil 1 data aja nanti munculnya 2 kali
    // mysqli_fetch_object() untuk objek, pake id tp tipe nya objek hrs pake tanda panah 
    // var_dump($mhs->nama); *codingan buat objek 

    //cara ngambil data yg muncul cuma 1 yg paling atas 
    //$mhs = mysqli_fetch_row($result);
    
    //kalo mau nampilin 1 data aja 
    //var_dump($mhs[1]); *coding ([1] ini id nya)
    ////var_dump($mhs["nama"]); *coding ([1] ini index nya) kalo mau nampilin nama aja 
    //var_dump($mhs[1]);

    //while ($mhs = mysqli_fetch_assoc($result))

    //var_dump($mhs); 

    //kaya css bisa conect di 1 halaman lebih efektif 
    require 'function.php';
    $query = "SELECT * FROM mahasiswa";
    $rows = query($query); //hasilnya wadah dengan isinya 
    
?>  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1> Data Mahasiswa </h1>
    <a href="tambahdata.php"><button style="margin-bootom: 12 px; background-color :lightblue;" >Tambah Data</button></a>
    
    <table border="1" cellspasing="0" cellpadding="10">
        <tr>
            <th> No </th>
            <th> Foto </th>
            <th> Nama </th>
            <th> NIM </th>
            <th> Jurusan </th>
            <th> No HP </th>
            <th> Aksi </th>
        </tr>
        <?php 
        $i = 1;
        foreach ($rows as $mhs) { ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="images/<?=$mhs['foto'];?> "alt="<?=$mhs['nama'];?>"width="100"></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td><?= $mhs['nohp']; ?></td>
            <td><a href= "hapusdata.php?id=<?= $mhs['id']; ?>"><button style="margin-bottom: 12px; background-color :red;" >Hapus</button></a>
                
        
        </tr>
        <?php $i++; } ?>
    </table>


</body>
</html>