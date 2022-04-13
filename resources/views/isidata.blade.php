<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <title>Isi Data</title>
</head>
<body>
        <div class="kanan row">
            <div class="col-1">
                <nav id="sidebarMenu" class="d-md-block sidebar collapse">
                    <div class="position-sticky pt-3 sidebarMenu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="home" class="nav-link active" aria-currrent="page">
                                    <img src="{{asset ('img/icon/home.png')}}" alt="" class="navIcon">
                                </a>
                            </li>
                            <hr class="garis">
                            <li class="nav-item">
                                <a href="catatan" class="nav-link active" aria-currrent="page">
                                    <img src="{{asset ('img/icon/schedule.png')}}" alt="" class="navIcon">
                                </a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a href="isidata" class="nav-link active" aria-currrent="page">
                                    <img src="{{asset ('img/icon/isidata.png')}}" alt="" class="navIcon">
                                </a>
                            </li>
                            <div class="nav-item ms-2 mt-5">
                                <div>
                                    <form action="logout" method="POST">
                                        @csrf
                                        <input type="submit" name="logout" id="logout" class="btn btn-danger" value="Logout">
                                    </form>
                                </div>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-11">
                <div class="row">
                    <div class="head col align-self-center mt-3">
                        <a href="catatan" class="activeNav d-flex justify-content-start">
                            <img src="img/icon/isidata.png" class="navIconActive">
                            <h1 class="ms-3 mt-2">Isi Data</h1>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 justify-content-center mt-5">
                        <div class="container">
                            <div class="cardIsidata card">
                                <div class="card-body">
                                    @if(session()->has('berhasil'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ session('berhasil')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form class="ms-5 me-5 mt-3 mb-3" action="isidata" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label mb-2">Tanggal :</label>
                                            <input type="date" class="tambahData form-control" id="tanggal" name="tanggal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label mb-2">Waktu :</label>
                                            <input type="time" class="tambahData form-control" id="waktu" name="waktu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label mb-2">Suhu Tubuh :</label>
                                            <input type="text" class="tambahData form-control" id="suhutubuh" name="suhutubuh">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label mb-2">Lokasi :</label>
                                            <input type="text" class="tambahData form-control" id="lokasi" name="lokasi">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        <button type="submit" class="btn btn-danger ms-2 mt-3">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>