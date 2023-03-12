<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .navbar {
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 9999;
        }

        /* tambahkan margin top pada body untuk menghindari konten tertutup oleh navbar */
        body {
          margin-top: 70px;
        }
      </style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color : #8D7B68;">

    <div class="container">

        <a class="navbar-brand" href="/dashboard_user">Perpus</a>
        <div>
            <img src="assets/img/lg.png" alt=" "  width="50">
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class ="navbar-nav">
                <li class="nav-item">
                    <form action="/" method="GET" class="d-flex" style="background-color: #8D7B68;">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search" style="color: white;"></i>
                                        </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('register')}}">Register</a>
                </li>
            </ul>
    </div>
</nav>
</head>
