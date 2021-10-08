<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Tambah Data Karyawan</h2>
 
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/posting" method="POST">
		@csrf
        <label for="name">Nama</label><br>
        <input type="text" name="name" required="required"> <br/>
        <label for="date">Tanggal Lahir</label><br>
        <input type="date" name="date" required="required"> <br/>
        <label for="salary">Gaji</label><br>
        <input type="number" name="salary" required="required"> <br/>
        <label for="status">status karyawan</label><br>
        <select name="status" id="status">
            <option >--Pilih status--</option>
            <option value="True">True</option>
            <option value="False">False</option>
        </select><br>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>