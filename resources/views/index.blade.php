<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

<!-- style for pagination -->
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	
<div class="container">
		<div class="card">
			<div class="card-body">

				<h2>www.malasngoding.com</h2>
				<h3>Data Pegawai</h3>

				<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
				
				<br/>
					<p>Cari Data Pegawai :</p>
				<form action="/pegawai/cari" method="GET">
					<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input type="submit" value="CARI">
				</form>
				<br/>

				<table border="1" class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm">Edit</a> 
							|
							<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
				<br><br>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				{{$pegawai->links()}}
			</div>
		</div>
	</div>


</body>
</html>