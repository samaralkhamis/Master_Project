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
    @foreach ($SingleLabor as $SingleLabor)
        <!-- single product -->
        <div class="single-product mt-150 mb-150">
            <form action="{{ url('/CreateLCart') }}" method="post">
                <div class="container">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="single-product-img">
                                @csrf
                                <input type="hidden" name="Labor_id" value={{ $SingleLabor->Labor_id }}>
                                {{-- <input type="hidden" name="TruckImg" value={{$SingleLabor->TruckImg}}> --}}
                                {{-- <img src={{$SingleLabor->TruckImg}} alt=""> --}}
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <h3>{{ $SingleLabor->LaborFName }}</h3>
                                <input type="hidden" name="LaborFName" value={{ $SingleLabor->LaborFName }}>
                                <h3>{{ $SingleLabor->LaborLName }}</h3>
                                <input type="hidden" name="LaborLName" value={{ $SingleLabor->LaborLName }}>
                                <p class="single-product-pricing">Price : {{ $SingleLabor->Price }}</p>
                                <input type="hidden" name="Price" value={{ $SingleLabor->Price }}>
                                <div class="single-product-form">
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
