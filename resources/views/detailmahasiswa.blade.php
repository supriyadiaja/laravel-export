<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>

    #mahasiswas {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        line-height: 30px;
        font-size: 18px;
    }

    #mahasiswas td {
        {
        text-align: left;
        padding: 8px;
    }

    }

    /* #mahasiswas tr:nth-child(even) {
        /* background-color: #f2f2f2; */
    } */

    #mahasiswas tr:hover {
        /* background-color: #ddd; */
    }

    #mahasiswas th {
        /* background-color: #059862; */
        padding: 20px 0;
        /* text-align: left;
        color: white; */
    }
</style>
  <body>
    <div class="container w-32">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
              Biodata Mahasiswa
            </div>
            <form action="/detaildata/{{ $data->id }}" method="POST" class="d-flex justify-content-center my-5">
                <div class="mt-3" style="width: 207px; height: 207px;">
                    <a href="{{ asset('fotomahasiswa/'.$data->foto) }}"><img src="{{ asset('fotomahasiswa/'.$data->foto) }}" alt="" style="width: 200px; height: 200px;"></a>
                </div>
                <table id="mahasiswas" width="50%">
                    <tbody>
                        <tr>
                            <td class="text-end">Nama&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <td class="text-end">Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->jeniskelamin }}</td>
                        </tr>
                        <tr>
                            <td class="text-end">No Telepon&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->notelepon }}</td>
                        </tr>
                        <tr>
                            <td class="text-end">Email&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <td class="text-end">Alamat Rumah&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="/mahasiswa/" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
