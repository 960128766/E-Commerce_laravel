<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>E-commerce</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/Bayati_Hosaen .1.jpg') }}">
</head>
<body>
{{\Illuminate\Support\Facades\View::make('header')}}
@yield('content')
{{\Illuminate\Support\Facades\View::make('footer')}}

</body>
<style>
    .custom-login {
        height: 500px;
        padding: 100px;
    }

    img.slider-img {
        height: 400px;
    }

    .custom-product {
        height: 1000px;
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 10px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important;
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>
