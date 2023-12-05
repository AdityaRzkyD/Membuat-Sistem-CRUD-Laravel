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
            <td>{{ $data['kode'] }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $data['nama'] }}</td>
        </tr>
        <tr>
            <th>Jenis Barang</th>
            <td>{{ $data['jenis'] }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $data['qty'] }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>{{ $data['harga'] }}</td>
        </tr>
        <tr>
            <th>Diskon</th>
            <td>{{ $diskon }}%</td>
        </tr>
        <tr>
            <th>Harga Setelah Diskon</th>
            <td>{{ $harga_jual_setelah_diskon }}</td>
        </tr>
    </table>
    <button type="submit" class="update">Update</button>
</body>
</html>
