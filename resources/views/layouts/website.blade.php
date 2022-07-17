<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAO2DAOTREASURIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/inks.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="shortcut icon" href="{{asset('assets/images/logoink.png')}}" type="image/x-icon">
    <style>
        .bi {
            cursor: pointer;
        }
    </style>
    @yield('header')
</head>

<body>
    <div class="container-fluid header p-3 align-items-center">
        <div class="logo ms-md-4 d-flex align-items-center">
            <img src="{{asset('assets/images/logoink.png')}}" alt="#" class="logo_img">
            <a href="{{url('')}}"><span class="ms-1 fw-bold" style="color:#212529">DAO2DAOTREASURIES</span></a>
        </div>
        <div class="hd-text ms-md-4">
            {{-- <marquee> --}}
                <P style="min-width: 112.4px;"> <i class="bi bi-info-circle" tabindex="0" data-toggle="tooltip"
                        data-placement="top" title={{$header->where('name','daos')->first()?->info}} ></i> DAO's: <small
                        style="color: blue;">{{$header->where('name','daos')->first()?->value}}</small></P>
                <P class="ms-4"> <i class="bi bi-info-circle" tabindex="0" data-toggle="tooltip" data-placement="top"
                        title="{{$header->where('name','drt')->first()?->info}}"></i> Global-DRT: <small
                        style="color: blue;">Global
                        {{$header->where('name','drt')->first()?->value}}</small></P>
                <P class="ms-4"> <i class="bi bi-info-circle" tabindex="0" data-toggle="tooltip" data-placement="top"
                        title="{{$header->where('name','golden_no')->first()?->info}}"></i> Golden No: <small
                        style="color: blue;">{{$header->where('name','golden_no')->first()?->value}}</small></P>
                {{--
            </marquee> --}}
        </div>
        @yield('topnav')
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="p-4 mt-5 bg-dark text-light text-center position-relative" >
        <div class="container">
            <img src="{{asset('assets/images/logoink.png')}}" alt="#">
            <p class="lead">Copyright &copy; {{date('Y')}}. Dao2DaoTreasuries</p>

        </div>

        <a href="#" class="arrrow bottom-0 end-0">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="inks.js"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    @yield('footer')
</body>

</html>