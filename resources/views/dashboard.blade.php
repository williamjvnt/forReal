<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        nav {
            font-size: 16px;
        }

        html,
        body {
            height: 90%;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
        }

        footer {
            font-size: 12px;
            margin: 5px;
        }

        /* Responsive */
        @media screen and (max-width: 412px) {
            nav {
                margin: 0;
                font-weight: bold;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-teritiary">
        <div class="container-fluid">
            <div class="navbar-brand ms-5" style="font-weight: bold;">My Portofolio</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('project')}}">My small Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('other')}}">Other</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        @yield('content')
    </div>
    <!--footer-->
    <footer class="main-footer fixed-bottom">
        <!-- To the right -->
        <div class="float-center d-none d-sm-inline">
            Copyright & copy by William Juvent
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>