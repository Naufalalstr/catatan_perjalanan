<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <title>Catatan Perjalanan</title>
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
                        <a href="catatan" class="activeNav d-flex justify-content-start">
                            <img src="img/icon/schedule.png" class="navIconActive">
                            <h1 class="ms-3 mt-2">Catatan Perjalanan</h1>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 justify-content-center mt-3">
                        <div class="d-flex">
                            <div class="dropdown d-flex mt-5">
                                <h4 class="mt-2 ms-5">Urutkan Berdasarkan</h4>
                                <button class="btn btn-secondary btn-lg dropdown-toggle ms-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tanggal
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Tanggal</a></li>
                                    <li><a class="dropdown-item" href="#">Waktu</a></li>
                                    <li><a class="dropdown-item" href="#">Lokasi</a></li>
                                    <li><a class="dropdown-item" href="#">Suhu Tubuh</a></li>
                                </ul>
                            </div>
                            <button type="submit" class="btnUrutkan btn btn-primary d-flex">Urutkan</button>
                        </div>
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                            <div class="card-body">
                                                <table class="table text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Tanggal</th>
                                                            <th>Waktu</th>
                                                            <th>Suhu Tubuh</th>
                                                            <th>Lokasi</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $data)
                                                            <tr class="align-middle">
                                                                <th scope="row">{{ $data->tanggal}}</th>
                                                                <td>{{ $data->waktu}}</td>
                                                                <td>{{ $data->suhu_tubuh}}</td>
                                                                <td>{{ $data->lokasi}}</td>
                                                                <td class="text-center">
                                                                    <a href="" class="btn btn-success">Edit</a>
                                                                    <form action="catatan/{{ $data->id }}" method="post" class="d-inline">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <input type="submit" class="btn btn-danger" value="Hapus" onclick="return confirm('Are you sure?')">
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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