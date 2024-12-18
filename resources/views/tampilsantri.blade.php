

@section('konten')
<h3>Daftar Menu</h3>
<a class="btn btn-success" href="{{route('tambahsantri')}}"><i class="fa fa-plus"></i> Tambah Santri</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>ID</th>
    <th>Nama Makanan</th>
    <th>Jenis</th>
    <th>Harga</th>
    <th>Aksi</th>
  </tr>
  @foreach($santri as $s)
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->nama}}</td>
    <td>{{$s->jenis}}</td>
    <td>{{$s->harga}}</td>

    <td>
      <a href="/santri/ubah/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/santri/hapus/{{$s->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WERES</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>

   <body>


  <!-- Navbar -->
    <div class="container">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('home')}}">WERES</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                              <!-- Menu -->
                              <li>
                                <a href="santri/tampil">
                                    <i class="fa fa-bars"></i> Menu
                                </a>
                            </li>
                            <!-- Menu Home -->
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </li>
                            <!-- Menu Kategori -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-utensils"></i> Kategori <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fas fa-leaf"></i> Makanan Pembuka</a></li>
                                    <li><a href="#"><i class="fas fa-drumstick-bite"></i> Makanan Utama</a></li>
                                    <li><a href="#"><i class="fas fa-coffee"></i> Minuman</a></li>
                                    <li><a href="#"><i class="fas fa-ice-cream"></i> Pencuci Mulut</a></li>
                                </ul>
                            </li>

                            <!-- User dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> {{Auth::user()->name}} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a>Level: {{Auth::user()->role}}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="content">
                    @yield('konten')
                </div>
            </div>
        </div>
    </div>

</body>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>

