<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Politeknik Jakarta | @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">

    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

            body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3faff;  
            padding: 30px; /* Menambahkan padding pada body untuk memberikan jarak */
            font-family: 'Roboto', sans-serif; /* Font yang digunakan */
            margin: 0px;
            padding: 0px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .welcome-text {
            position: absolute;
            top: 3px;
            right: 80px;
            text-align: right;
            font-size: 1.5em;
            color: #12100e; /* Warna teks */
            z-index: 3; /* Di atas elemen lain */
            padding: 10px;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        .footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="welcome-text">
        <h4><b>Politeknik Negeri Jakarta<b></h4>
    </div>
    <div class="content">
        <div class="menu" style=margin-left:50px;>
            @include('menu')
        </div>
        <div class="banner">
            @include('banner')
        </div>
        <div class="konten">
            @include('konten')
        </div>
    </div>

    <div class="footer">
        @include('footer')
    </div>
</body>
</html>