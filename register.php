<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>formulir</h1>
    <label for="nama">Nama Lengkap</label> <br> <br>
    <input type="text" name="nama"> <br> 
    <Email for="email">Email</label> <br>
    <input type="email" name="email"> <br> <br>
    <label for="password">Password</label> <br>
    <input type="password" name="password"> <br> <br>
    <label for="umur">umur</label> <br>
    <input type="number" name="umur"> <br> <br>
    <label for="Tanggal Lahir">Tanggal Lahir</label> <br>
    <input type="date" name="tanggal_lahir"> <br> <br>
    <label for="Warna favorit">Warna Favorit</label> <br>
    <input type="color" name="warna_favorit"> <br> <br>
    <label for="Upload Foto">Upload Foto</label> <br>
    <input type="file" name="upload_foto"> <br> <br>
    <label for="Pilihan Jenis Kelamin">Pilihan Jenis Kelamin</label> <br>
    <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br> <br>
    <label for="Pilihan Hobi">Pilihan Hobi</label> <br>
    <input type="checkbox" name="hobi[]" value="membaca">Membaca <br>
    <input type="checkbox" name="hobi[]" value="Traveling">Traveling <br>
    <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga <br> <br>
    <label for="Pilihan Negara">Pilihan Negara</label> <br>
    <select name="negara" id="negara">
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Indonesia">Indonesia</option>
    
    </select> <br> <br>
    <label for="Biografi Singkat">Biografi Singkat</label> <br>
    <textarea name="biografi" id="biografi" cols="30" rows="10"></textarea> <br> <br>
</body>
</html>