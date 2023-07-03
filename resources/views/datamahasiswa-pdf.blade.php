<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                width: 100%;
            }

            #mahasiswas {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                font-size: 12px;
            }

            #mahasiswas td,
            #mahasiswas th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #mahasiswas tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #mahasiswas tr:hover {
                background-color: #ddd;
            }

            #mahasiswas th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #E36200;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1 class="text-center">Data Mahasiswa</h1>

        <table id="mahasiswas">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row )
            <tr>
                <td>{{ $no ++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>0{{ $row->notelepon }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->alamat }}</td>
            </tr>

            @endforeach
        </table>
    </body>
</html>
