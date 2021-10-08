<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach($karyawans as $karyawan)
	<form action="/update" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{ $karyawan->id}}"> <br/>
		<label for="name">Nama</label><br>
        <input type="text" name="name" value="{{ $karyawan->Nama }}" required="required"> <br/>
        <label for="date">Tanggal Lahir</label><br>
        <input type="date" name="date" value="{{ $karyawan->Tanggal_Lahir }}" required="required"> <br/>
        <label for="salary">Gaji</label><br>
        <input type="number" name="salary" value="{{ $karyawan->Gaji }}" required="required"> <br/>
        <label for="status">status karyawan</label><br>
        <select name="status" id="status">
            <option >--Pilih status--</option>
            <option {{old('Status_Karyawan',$karyawan->Status_Karyawan)=="True"? 'selected':''}} value="True">True</option>
            <option {{old('Status_Karyawan',$karyawan->Status_Karyawan)=="False"? 'selected':''}} value="False">False</option>
        </select><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>