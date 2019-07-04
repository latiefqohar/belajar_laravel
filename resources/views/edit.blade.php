<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
    <!-- foreach -->
    @foreach($pegawai as $p) 
    <form action="/pegawai/update" method="post">
    <!-- wajib csrf -->
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id}}">
        Nama <input type="text" required name="nama" value="{{$p->pegawai_nama}}">
        jabatan <input type="text" required name="jabatan" value="{{$p->pegawai_jabatan}}">
        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>