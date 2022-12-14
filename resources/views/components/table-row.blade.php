@props(['no', 'no_faktur', 'nama_nasabah', 'kabupaten', 'tanggal_in', 'status'])

<tr>
	<td>{{ $no }}</td>
	<td>{{ $no_faktur }}</td>
	<td>{{ $nama_nasabah }}</td>
	<td>{{ $kabupaten }}</td>
	<td>{{ $tanggal_in }}</td>
	<td>
		@if ($status == 1)
			<label class="badge badge-danger">Belum Terverifikasi</label>
		@elseif ($status == 2)
			<label class="badge badge-warning">Terverifikasi Samsat</label>
		@elseif ($status == 3)
			<label class="badge badge-success">Diterima Dealer</label>
		@endif
	</td>
	<td>
		<button class="btn btn-sm btn-warning btn-icon-text">
			<i class="mdi mdi-eye btn-icon-prepend"></i>
			Detail
		</button>
	</td>
</tr>
