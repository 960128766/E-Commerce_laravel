@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
            <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h4>Result Products</h4>
                    @foreach($products as $item)
                        <div class="searched-item">
                            <a href="{{url('/detail',['id'=>$item->id])}}">
                                <img src="{{$item->gallery}}" class="trending-image">
                                <div class="">
                                    <h2>{{$item->name}}</h2>
                                    <h5>{{$item->description}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
