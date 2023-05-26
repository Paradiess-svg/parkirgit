<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Supplier</title>
</head>

<body>
    <table>
        <form method="POST" action="{{ url('save') }}">
            @csrf
            Nama Supplier
            <input type="text" name="namaSupplier" placeholder="Nama
Supplier"> <br>
            Alamat Supplier
            <input type="text" name="alamatSupplier" placeholder="Alamat
Supplier"><br>
            Telepon Supplier
            <input type="text" name="telpSupplier" placeholder="Telp
Supplier"><br> <br>
            <input type="submit" name="simpan" value="Simpan">

        </form>
    </table>
</body>

</html>
