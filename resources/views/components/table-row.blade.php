@props(['no', 'no_faktur', 'nama_nasabah', 'kabupaten', 'tanggal_in', 'status'])

<tr>
	<td>{{ $no }}</td>
	<td>{{ $no_faktur }}</td>
	<td>{{ $nama_nasabah }}</td>
	<td>{{ $kabupaten }}</td>
	<td>{{ $tanggal_in }}</td>
	<td>
		<label class="badge badge-warning">{{ $status }}</label>
	</td>
	<td>
		<a href="" class="btn btn-sm btn-warning ">
			<span class="d-flex align-items-center">
				<i class="mdi mdi-eye mr-1"></i>
				Detail</span>
		</a>
	</td>
</tr>
