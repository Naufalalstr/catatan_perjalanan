<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <title>Home</title>
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
                            <hr>
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
                            <a href="home" class="activeNav d-flex justify-content-start">
                                <img src="img/icon/home.png" class="navIconActive">
                                <h1 class="ms-3 mt-2">Home</h1>
                            </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 justify-content-center mt-5">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card-body">
                                                <h1 class="">Welcome to</h1>
                                                <h1 class="">Peduli Diri</h1>
                                                <div class="btnBody">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-outline-secondary submit px-3">
                                                            <a href="catatan" class="nav-link d-flex">
                                                                <img src="img/icon/schedule.png" alt="" class="navIconCard">
                                                                <h5 class="dlmbtn">Catatan</h5>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-outline-secondary submit px-3 mt-3">
                                                            <a href="isidata" class="nav-link d-flex">
                                                                <img src="img/icon/brush.png" alt="" class="navIconCard">
                                                                <h5 class="dlmbtn">Isi Data</h5>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cardRiwayat card-body d-flex justify-content-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="t-align-center">Daftar Riwayat :</h2>
                                                        <hr>
                                                        @foreach($data as $data)
                                                        <h5 class="card-title">- {{ $data->lokasi }}</h5>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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