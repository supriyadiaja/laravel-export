<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tambah Mahasiswa</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container" style="width: 40%">
            <h1 class="mt-3">Tambah Mahasiswa</h1>
            <form action="/insertdata" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label"
                        >Masukkan Nama</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="nama"
                        name="nama"
                        placeholder="Enter your name"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jeniskelamin">
                        <option selected>-- Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="notelepon" class="form-label"
                        >No Telepon</label>
                    <input
                        type="number"
                        class="form-control"
                        name="notelepon"
                        id="notelepon"
                        placeholder="Enter Number Telepon"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"
                        >Masukkan Email</label
                    >
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Enter your Email"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"
                        >Masukkan Alamat</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        name="alamat"
                        id="alamat"
                        placeholder="Enter your address"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label"
                        >Masukkan Foto (200x200)</label
                    >
                    <input
                        type="file"
                        class="form-control"
                        name="foto"
                        id="foto"
                    />
                </div>
                <button type="submit" class="btn btn-success mb-5" style="float: right">Simpan</button>
            </form>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
