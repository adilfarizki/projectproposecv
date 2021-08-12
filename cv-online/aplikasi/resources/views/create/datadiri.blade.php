@extends('master')
@section('content')
    <section id="input-one">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-4 bulet1 me-5"><i class="fas fa-user text-white text-center"></i></div>
                <div class="col-md-4 bulet2 me-5" style="opacity: 50%;"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-4 bulet3 me-5" style="opacity: 50%;"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1">Data Diri</h4>
                        <div class="row mt-2 mt-md-4">
                            <div class="col-12 col-md-4">
                                <label for="exampleInputPassword1" class="form-label">Masukan Foto</label>
                                <input type="file" class="form-control p-5">
                            </div>
                            <div class="col-md-8">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Satu</option>
                                        <option value="1">Laki - Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Status Perkawinan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Negara</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end ">
                <a class="btn btn-create pe-5 ps-5 " href="{{ route('pengalaman') }}">Lanjut</a>
            </div>
        </div>
    </section>
@endsection
@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection
