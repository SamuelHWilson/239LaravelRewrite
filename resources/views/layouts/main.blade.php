<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/app.css">

    <title>Five Star Guitars</title>
</head>
<body>
    <!-- Page header. (Done similarly in Bootstrap example page.) -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Five Star Guitars</a>
    </nav>

    <div class="container-fluid">
        <div class="row" style="height:100vh;">
            <!-- Side Nav -->
            <div class="sidenav col-lg-2">
                <ul class="nav flex-column sticky-top">
                    <li class="nav-item"><a href="/orders/" class="nav-link"><i class="fa fa-credit-card fa-fw fa-lg mr-1"></i>Orders</a></li>
                    <li class="nav-item"><a href="/products/" class="nav-link"><i class="fa fa-cubes fa-fw fa-lg mr-1"></i>Products</a></li>
                </ul>
            </div>
            <div class='col-lg-10'>
                <div class='container'>
                    <div class='row'>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>