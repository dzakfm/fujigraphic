<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Tambahkan CSS jika ada -->
</head>
<body>

    @include('partial.navbar') <!-- Memanggil navbar dari folder partials -->

    <div class="content">
        @yield('content')  <!-- Bagian konten halaman lain -->
    </div>

    @include('partial.footer') <!-- Memanggil footer dari folder partials -->

</body>
</html>
