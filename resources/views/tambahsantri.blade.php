

@section('konten')
<h3>Form Input Santri</h3>
<form method="post" action="{{route('simpansantri')}}">
  @csrf
  <div class="form-group">
    <label>namam</label>
    <input type="text" name="nama" class="form-control" placeholder="nama" required="">
  </div>
  <div class="form-group">
    <label>kategori</label>
    <div class="form-group">
        <label><i class="fa fa-address-book"></i> Kategori</label>
        <select name="jenis" id="jenis">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
            <option value="Kue">Kue</option>
          </select>
  </div>
  {{-- <div class="form-group">
    <label>deskripsi</label>
    <textarea name="deskripsi" rows="3" class="form-control" placeholder="deskripsi" required=""></textarea>
  </div> --}}
  <div class="form-group">
    <label>harga</label>
    <input type="text" name="harga" class="form-control" placeholder="harga" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
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

