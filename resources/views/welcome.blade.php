<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>ToDoList - Hoşgeldiniz</title>

    <meta name="description" content="">

    <link rel="icon" type="image/x-icon" href="{{asset('/panel/assets/img/favicon/favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/panel/assets/vendor/fonts/boxicons.css')}}">
    <link rel="stylesheet" href="{{asset('/panel/assets/vendor/css/core.css')}}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{asset('/panel/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{asset('/panel/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('/panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('/panel/assets/vendor/js/helpers.js')}}"></script><style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }
        .content-wrapper {
            padding-bottom: 0px !important;
        }</style>

    <script src="../assets/js/config.js"></script>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            margin: 10px;
            width: 18rem;
            height: 400px; /* Kartların boyunu sabitledim */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* İçerikleri eşit yayar ve butonu alta iter */
        }
        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* İçeriği yukarı ve aşağı yayar */
        }
        .card-text {
            flex-grow: 1;
        }
        .btn-container {
            text-align: center;
            padding: 10px;
        }

    </style>
</head>

<body>

<div class="container">
    <div class="card">
        <img class="card-img-top" src="assets/images/login.png" alt="Card image">
        <div class="card-body">
            <p class="card-text">Short text.</p>
            <div class="btn-container">
                <a href="#" class="btn btn-primary">Detaylar</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="assets/images/register.png" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">A longer example text to test how the button remains at the bottom of the card even when text length varies.</p>
            <div class="btn-container">
                <a href="#" class="btn btn-primary">Detaylar</a>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('/panel/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('/panel/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('/panel/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('/panel//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="../assets/vendor/js/menu.js"></script>
<script src="{{asset('/panel/assets/js/main.js')}}"></script>
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

</body>
</html>
