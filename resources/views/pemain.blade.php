@yield('content')
<h1>Data Pemain</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Pemain</th>
        <th>No Punggung</th>
        <th>Posisi</th>
    </tr>
    @foreach($data as $pemain)
    <tr>
        <td>{{ $pemain->id }}</td>
        <td>{{ $pemain->nama_pemain }}</td>
        <td>{{ $pemain->no_punggung }}</td>
        <td>{{ $pemain->posisi }}</td>
    </tr>
    @endforeach
</table>