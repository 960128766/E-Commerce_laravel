<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (\Illuminate\Support\Facades\Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>
                <li>
                    <form action="/search" class="d-flex">
                        <input name="query" class="form-control me-2 search-box" type="text" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>

            </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="/cartlist">cart({{$total}})</a></li>
            @if(\Illuminate\Support\Facades\Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button"
                       data-bs-toggle="dropdown">{{\Illuminate\Support\Facades\Session::get('user')['name']}}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</nav>

