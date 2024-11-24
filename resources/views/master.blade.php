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
    <link rel="stylesheet" href="{{asset('resep.css')}}">
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            padding: 15px;
            text-align: center;
        }
        .card-body h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .card-body p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
        .card-footer {
            background-color: transparent;
            border-top: none;
            text-align: center;
            padding: 10px;
        }
        .btn-view-more {
            background-color: #f39c12;
            color: #fff;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
        }
        .btn-view-more:hover {
            background-color: #d87d0f;
        }
    </style>
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


                    <!-- Menu Login/Register untuk Guest -->
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                   

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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <img src="{{ asset('banner.jpg') }}" alt="Banner" class="img-responsive" style="width: 100%; border-radius: 10px; margin-bottom: 50px; height:400px">
                </div>
            </div>
        </div>
    </div>

    <!-- Cards Section -->
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.tokomesin.com/wp-content/uploads/2015/02/d5a3498cfc9e53130b5f815ef44713b7_Jet-tokomesin.jpg" alt="Sweets">
                    <div class="card-body">
                        <h5>Makanan</h5>
                        <p>Makanan Khas Yang Lezat Dan Bergiji banget ges</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="btn-view-more">View More →</a>
                    </div> --}}
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/03/09062214/X-Manfaat-Es-Jeruk-dan-Resep-untuk-Membuatnya.jpg" alt="Coffee & Beer">
                    <div class="card-body">
                        <h5>Minuman</h5>
                        <p>Minuman Seger Dari Laut Jawa</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="btn-view-more">View More →</a>
                    </div> --}}
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://madame-chang.com/wp-content/uploads/2024/04/ladyfingers-cream-tiramisu-food-1024x574.jpg" alt="Cake & Cookies">
                    <div class="card-body">
                        <h5>Kue</h5>
                        <p>Disert enak khas sunda</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="btn-view-more">View More →</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
