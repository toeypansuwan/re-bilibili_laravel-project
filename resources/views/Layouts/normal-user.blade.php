<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Re-Bilibili</title>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 position-fixed fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('image/top_logo (1).svg') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex mx-auto col-6">

                    <div class="input-group mb-3 search">
                        <input class="form-control " type="text" placeholder="Search..."
                            aria-label="default input example">
                        <button class="btn btn-outline-secondary d-inline-flex" type="button" id="button-addon2">
                            <span class="material-icons-outlined">
                                search
                            </span>
                        </button>
                    </div>
                </div>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link d-inline-flex align-items-center gap-2" href="#">
                            <span class="material-icons-outlined">
                                cloud_upload
                            </span>
                            อัพโหลด
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-flex align-items-center gap-2" href="#">

                            เข้าสู่ระบบทันที
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <img width="40" height="40" src="{{ asset('image/test.jpeg') }}"
                            class="nav-link dropdown-toggle rounded-circle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" />
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">

                    <div class="site-left">
                        <ul class="list-unstyled fw-normal pb-1">
                            <li>
                                <a href="" class="d-inline-flex align-items-center gap-2 rounded active">
                                    <span class="material-icons-outlined">
                                        house
                                    </span>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-inline-flex align-items-center gap-2 rounded">
                                    <span class="material-icons-outlined">
                                        ondemand_video
                                    </span>
                                    วิดีโอ
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-inline-flex align-items-center gap-2 rounded">
                                    <span class="material-icons-outlined">
                                        filter_list
                                    </span>
                                    ทั้งหมด
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-inline-flex align-items-center gap-2 rounded ">
                                    <span class="material-icons-outlined">
                                        history
                                    </span>
                                    ประวัติ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <main id="app">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
