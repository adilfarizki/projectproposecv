@extends('master')
@section('content')
    <section id="input-one">
        <div class="breadcrumb container w-75 justify-content-evenly">
            <div class="row">
                <div class="col-md-4 bulet1 me-5" style="opacity: 50%;"><i class="fas fa-user text-white text-center"></i></div>
                <div class="col-md-4 bulet2 me-5"><i
                        class="fas fa-file-alt text-white text-center"></i>
                </div>
                <div class="col-md-4 bulet3 me-5" style="opacity: 50%;"><i
                        class="fas fa-check   text-white text-center"></i>
                </div>
            </div>
        </div>
        <div class="container ">
            <!-- deskripsi -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Tentang Saya</h4>
                        <label for="exampleInputPassword1" class="form-label">Deskripsi Diri</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"
                            placeholder="Deskripsikan dirimu"></textarea>

                    </form>
                </div>
            </div>
            <!-- riwayat pendidikan -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Riwayat Pendidikan</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Instansi <i
                                            class="fw-light">( Sekolah / Universitas / dll )</i> </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Kota <i class="fw-light">( Tulis:
                                            Kota, Negara )</i></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- organisasi -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Pengalaman Organisasi</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Organisasi <i
                                            class="fw-light">( Tulis: Nama, Jabatan )</i></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- prestasi -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Prestasi</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Prestasi <i
                                            class="fw-light">( Tulis: Nama, Jabatan )</i></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- pengalaman kerja -->
            <div class="card shadow mb-4">
                <div class="container">
                    <form action="">
                        <h4 class="border-bottom border-1 border-dark pb-1  mb-2 mb-md-4">Pengalaman Kerja</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Mulai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Perusahaan <i class="fw-light">(
                                            Tulis: Nama, Kota )</i></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-2 ">
                                    <label for="exampleInputPassword1" class="form-label">Selesai</label>
                                    <input type="month" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- button -->
            <div class="jarak d-grid gap-2 d-md-flex justify-content-md-end ">
                <a class="btn btn-merah pe-5 ps-5  " href="{{ route('datadiri') }}">
                    kembali
                </a>
                <button class="btn btn-create pe-5 ps-5 ">
                    Lanjut
                </button>
            </div>
        </div>
    </section>
@endsection
@section('active')
    <li class="nav-item">
        <a class="nav-link me-5" aria-current="page" href="{{ route('home') }}">Home</a>
    </li>
@endsection
