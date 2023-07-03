<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Sistem Informasi Mahasiswa</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />

        <link
            rel="stylesheet"
            href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"
        />
        <link
            rel="stylesheet"
            href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <h1 class="my-4 text-center fw-bold">DATA MAHASISWA</h1>
            <div class="type-export d-flex justify-content-start">
                <a href="/tambahmahasiswa" class="btn btn-success my-3"
                    >Tambah <i class="bi bi-person-plus-fill"></i></a
                >
                <div class="export mb-0 mt-3 ms-5">
                    <a href="/exportpdf" class="btn btn-danger"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Export PDF">
                        <i class="bi bi-file-earmark-pdf"></i>
                    </a>
                    <a href="/exportexcel" class="btn btn-success"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Export Excel">
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    </a>
                    <button
                        type="button"
                        class="btn btn-primary import position-relative"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <a href="#exampleModal" class="btn position-absolute bg-transparent top-0  h-100"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="Import Data">
                        </a>
                        <i class="bi bi-file-earmark-arrow-down"></i>
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Masukkan Data
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <form
                            action="/importdata"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" name="file" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped" id="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($data as $row )
                    <tr>
                        <th style="width: 5%; text-align: center" scope="row">
                            {{ $no ++ }}
                        </th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelepon }}</td>
                        <td>{{ $row->email }}</td>
                        <td style="width: 15%">
                            <a href="/detaildata/{{ $row->id }}" class="btn btn-secondary"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Detail">
                            <i class="bi bi-journal-text"></i>
                            </a>
                            <a href="/tampildata/{{ $row->id }}" class="btn btn-warning"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip"
                                data-bs-title="Edit">
                                <i class="bi bi-pencil-square"></i>
                                </a>
                            <a href="#" class="btn btn-danger delete"
                                data-id="{{ $row->id }}"
                                data-nama="{{ $row->nama }}"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip"
                                data-bs-title="Delete">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            let table = new DataTable("#table");
        </script>
        <script>
            $(".delete").click(function () {
            const idmahasiswa = $(this).attr('data-id');
            const namamahasiswa = $(this).attr('data-nama');
                // toas
                swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data "+namamahasiswa+" ",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedata/"+idmahasiswa+""
                        swal("Data berhasil dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
            });
        </script>
        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>

        <script>
            @if (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        </script>
    </body>
</html>
