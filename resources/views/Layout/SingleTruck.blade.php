@extends('layout.Master')
@section('title, SingleProduct')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Single Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    @foreach ($SingleTruck as $SingleTruck)
        <!-- single product -->
        <div class="single-product mt-150 mb-150">
            <form action="{{ url('/CreateTCart') }}" method="post">
                <div class="container">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="single-product-img">
                                @csrf
                                <input type="hidden" name="Truck_id" value={{ $SingleTruck->Truck_id }}>
                                <input type="hidden" name="TruckImg" value={{ $SingleTruck->TruckImg }}>
                                <input type="hidden" name="Truck_Title" value={{ $SingleTruck->Truck_Title }}>
                                <img src={{ $SingleTruck->TruckImg }} alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
								<p  class="single-product-pricing">{{$SingleTruck->Truck_Title}}</p>
                                <h4 class="single-product-pricing">Price : {{ $SingleTruck->Price }}</h4>
                                <input type="hidden" name="Price" value={{ $SingleTruck->Price }}>
                                <p>{{ $SingleTruck->TruckDes }}</p>
                                <p class="excerpt"><strong>Dimention :</strong><span name="Dimention">
                                        {{ $SingleTruck->Dimention_L_W_H }}</span> </p>
                                <p class="excerpt"><strong>Deck_height : </strong><span name="Deck_height">{{ $SingleTruck->Deck_height }} </span>
                                </p>
                                <p class="excerpt" name="Door_Opening"><strong>Door_Opening
                                    :</strong>{{ $SingleTruck->Door_Opening }} </p>
                                <div class="single-product-form">

                                    <input type="number" placeholder="1" name="Quantity" value="1" required>

                                    <button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <!-- end single product -->
    @endforeach

@endsection
