@include('admin.laporan.print.header')

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 11pt;
        }

    </style>
    <h6 class="text-center mb-4 font-weight-normal">{{ $title }}</h6>

    <table class='table table-bordered'>
        <tbody>
            <tr>
                <td>Total Anggota Terlambat / Didenda</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td>Total Uang Terkumpul</td>
                <td class="text-center">2</td>
            </tr>
        </tbody>
    </table>
    <span style="font-size: 10pt">Dicetak pada: {{ $time }}</span>
    <br>
    <br>
    <h6 class="text-center mb-4 font-weight-normal">Daftar Anggota Terlambat</h6>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID / NPM</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Kode Eksemplar</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Hari Terlambat</th>
                <th scope="col">Jumlah Bayar</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($denda as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->user_id }}</td>
                <td>{{ ucwords($item->user->name) }}</td>
                <td>{{ $item->pinjam_transaksi->bibliobigrafi->pola_eksemplar }}</td>
                <td>{{ $item->buku->judul }}</td>
                <td></td>
                <td>{{ $item->jumlah_bayar }}</td>
                <td></td>
                <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>