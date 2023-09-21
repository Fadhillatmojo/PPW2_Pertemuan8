@extends('master')
@section('body')
	@php
					use Carbon\Carbon;
	@endphp
	<p align="right">
		<a href="{{ route('buku.create') }}">Tambah buku</a>
	</p>
	<h3>
		Data normal
	</h3>
<table border="1px" class="table table-bordered">

	<thead>
		<tr>
		<th>id</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
		<th>Harga</th>
		<th>Tgl. Terbit</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	@foreach ($data_buku as $buku)
	<tr>
			<td>{{ $buku->id }}</td>
			<td>{{ $buku->judul }}</td>
			<td>{{ $buku->penulis }}</td>
			<td>{{ "Rp ". number_format($buku->harga, 2, ',', '.') }}</td>
			<td>{{ Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
			<td>
				<form action="{{ route('buku.destroy', $buku->id) }}" method="post">
					@csrf
					<button onClick="return confirm('yakin mau dihapus?')">
						Hapus
					</button>
				</form>
				<form action="{{ route('buku.update', $buku->id) }}" method="post">
					@csrf
					<button>
						<a href="{{ route('buku.update',$buku->id) }}">Update</a>
					</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<h3 class="mt-5">
	Sort by id terbesar Buku descending
</h3>
<table border="1px" class="table table-bordered">

	<thead>
		<tr>
		<th>id</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
		<th>Harga</th>
		<th>Tgl. Terbit</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	@foreach ($data_buku_sort as $buku)
	<tr>
			<td>{{ $buku->id }}</td>
			<td>{{ $buku->judul }}</td>
			<td>{{ $buku->penulis }}</td>
			<td>{{ "Rp ". number_format($buku->harga, 2, ',', '.') }}</td>
			<td>{{ Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
			<td>
				<form action="{{ route('buku.destroy', $buku->id) }}" method="post">
					@csrf
					<button onClick="return confirm('yakin mau dihapus?')">
						Hapus
					</button>
				</form>
				<form action="{{ route('buku.update', $buku->id) }}" method="post">
					@csrf
					<button>
						<a href="{{ route('buku.update',$buku->id) }}">Update</a>
					</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<h3>
	Tugas Praktikum
</h3>
	<p>
		Ada {{ $count_data }} data dalam tabel Buku <br>
		Harga total dari {{ $count_data }} buah buku di atas adalah Rp {{ $sum_harga }}
	</p>
@endsection
