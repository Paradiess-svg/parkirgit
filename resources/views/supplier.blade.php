<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($supplier as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->namaSupplier }}</td>
                <td>{{ $row->alamatSupplier }}</td>
                <td>{{ $row->telpSupplier }}</td>
                <td><a href="{{url('update')}}/{{$row->id}}"><button>Edit</button></a> | <form action="{{url('hapus')}}/{{$row->id}}" method="POST">
                    @csrf
                    @method ('delete')
                    <input type = "submit" value="Hapus">
                </form></td>
            </tr>
        @endforeach
    </table>
    <a href="{{url('tambahSupplier')}}"><h4>Tambah Data</h4>
</body>

</html>
