<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/assets/styles/main.css') }}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Laracamp - Admin Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                </ul>
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#">
                        Halo, {{ Auth::user()->name }}
                        <img src="{{ asset('frontend/assets/images/user_photo.png') }}" class="user-photo" alt="">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                            <li>
                                <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document: getElementById('logout-form'). submit()">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('frontend/assets/images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong>Waiting for Payment</strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('frontend/assets/images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong><span class="text-green">Payment Success</span></strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('frontend/assets/images/item_bootcamp.png') }}" height="120" alt=" ">
                            </td>
                            <td>
                                <p class=" mb-2 ">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong><span class="text-red ">Canceled</span></strong>
                            </td>
                            <td>
                                <a href="# " class="btn btn-primary ">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>

</body>

</html>