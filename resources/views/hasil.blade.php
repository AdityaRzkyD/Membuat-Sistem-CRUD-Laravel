<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil</title>
</head>
<body>
    <h1>Hasil</h1>
    <table>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Quantity</th>
            <th>Harga Jual</th>
            <th>Total Harga</th>
            <th>Potongan Harga</th>
            <th>Total Bayar</th>
            <th>Edit</th>
        </tr>
        @foreach ($hasill as $data)
        <tr>
            <td>{{ $data['kode'] }}</td>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['jenis'] }}</td>
            <td>{{ $data['qty'] }}</td>
            <td>{{ $data['harga'] }}</td>
            <td>{{ $data['hargatotal'] }}</td>
            <td>{{ $data['diskon'] }}</td>
            <td>{{ $data['total'] }}</td>
            <td><a href="/barang/Update/{{ $data['id'] }}">Edit</a></td>
            <td><a href="/barang/delete/{{ $data['id'] }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
