@extends('master')
@section('content')

    <div class=" custom-product">

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==1 ? 'active':''}}">
                        <a href="{{url('/detail',['id'=>$item->id])}}">
                            <img src="{{$item->gallery}}" class="slider-img" style="width:100%">
                            <div class="carousel-caption slider-text">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>


        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach($products as $item)
                <div class="trending-item">
                    <a href="{{url('/detail',['id'=>$item->id])}}">
                        <img src="{{$item->gallery}}" class="trending-image">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
