<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LaporBanjir')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef6f1;
            color: #26352b;
            min-height: 100vh;
        }

        .navbar {
            background: white;
            border-bottom: 1px solid #dde8df;
            padding: 0 7%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            color: #285473;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #66736a;
            font-size: 14px;
            transition: .2s;
        }

        .nav-menu a:hover {
            color: #285473;
        }

        .container {
            width: 90%;
            max-width: 1050px;
            margin: 45px auto;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            color: #285473;
            margin-bottom: 7px;
        }

        .page-title p {
            color: #7d8981;
            font-size: 14px;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            border: 1px solid #e0e9e2;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 13px;
            border: 1px solid #d8e2da;
            border-radius: 9px;
            outline: none;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #285473;
        }

        .btn {
            display: inline-block;
            border: none;
            border-radius: 9px;
            padding: 13px 22px;
            background: #285473;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn:hover {
            background: #285473;
        }

        .alert {
            padding: 15px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            background: #e5f5e9;
            color: #285473;
            border: 1px solid #c9e6d0;
        }

        .laporan-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .laporan-card {
            background: white;
            border: 1px solid #e0e9e2;
            border-radius: 16px;
            padding: 25px;
        }

        .laporan-card h3 {
            color: #28733b;
            margin-bottom: 15px;
        }

        .laporan-data {
            margin: 8px 0;
            font-size: 14px;
        }

        .label {
            color: #7b877f;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            margin-top: 12px;
            font-size: 12px;
            font-weight: bold;
        }

        .waspada {
            background: #fff4cc;
            color: #8a6800;
        }

        .siaga {
            background: #ffe4bd;
            color: #9b5200;
        }

        .awas {
            background: #ffd8d8;
            color: #a52828;
        }

        .footer {
            text-align: center;
            padding: 25px;
            color: #89958d;
            font-size: 12px;
            margin-top: 50px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-menu {
                gap: 12px;
            }

            .laporan-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">

        <a href="{{ route('laporan.index') }}" class="brand">
            🚨 LaporBanjir
        </a>

        <nav class="nav-menu">
            <a href="{{ route('laporan.index') }}">
                Daftar Laporan
            </a>

            <a href="{{ route('laporan.form') }}">
                Buat Laporan
            </a>
        </nav>

    </header>


    <main class="container">

        @yield('content')

    </main>


    <footer class="footer">
        &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
    </footer>

</body>
</html>