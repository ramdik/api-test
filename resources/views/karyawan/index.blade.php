<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <a href="/create"> + Tambah Karyawan Baru</a><br><br>

    <table border="1">
		<tr>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Gaji</th>
			<th>Status Karyawan</th>
			<th>Action</th>
		</tr>
		@foreach($karyawans as $karyawan)
		<tr>
			<td>{{ $karyawan->Nama }}</td>
			<td>{{ $karyawan->Tanggal_Lahir }}</td>
			<td>{{ $karyawan->Gaji }}</td>
			<td>{{ $karyawan->Status_Karyawan }}</td>
			<td>
				<a href="/edit/{{ $karyawan->id }}">Edit</a>
				|
				<a href="/delete/{{ $karyawan->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>