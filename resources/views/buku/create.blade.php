@extends('master')
@section('body')
	<div class="container">
		<h4>Tambah buku</h4>
		<form method="post" action="{{ route('buku.store') }}">
		@csrf
			<div>Judul <input type="text" name="judul"></div>
			<div>Penulis <input type="text" name="penulis"></div>
			<div>Harga <input type="text" name="harga"></div>
			<div>Tgl.terbit <input type="date" name="tgl_terbit"></div>
			<div>
				<button type="submit">Simpan</button>
				<a href="/buku">Batal</a>
			</div>
		</form>
	</div>
@endsection