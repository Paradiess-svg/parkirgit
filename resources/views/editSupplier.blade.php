<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Supplier</title>
</head>

<body>
    <table>
        <form action="{{url('edit')}}/{{$id}}" method="POST">
            @csrf
            @method('put')
            Nama Supplier
            <input type="text" name="namaSupplier" placeholder="Nama
Supplier" value="{{ $namaSupplier }}"> <br>
            Alamat Supplier
            <input type="text" name="alamatSupplier" placeholder="Alamat
Supplier" value="{{ $alamatSupplier }}"><br>
            Telepon Supplier
            <input type="text" name="telpSupplier" placeholder="Telp
Supplier" value="{{ $telpSupplier }}"><br> <br>
            <input type="submit" name="simpan" value="Simpan">

        </form>
    </table>
</body>
