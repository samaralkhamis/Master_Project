@extends('layout.Master')
@section('title, Checkout')

@section('content')

    {{-- {{Auth::users()->id}} --}}
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Checkout Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Billing Address
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="{{url('Checkout')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                <label>&nbsp; Name</label>
                                                <p><input type="text" placeholder="name" name="name" value={{ Auth::user()->name }} required>
                                                </p></div>

                                                <div class="form-group">
                                                    <label>&nbsp; Email</label>
                                                <p><input type="email" name="Email"
                                                        value={{ Auth::user()->email }} required></p>
                                                </div>

                                                <div class="form-group">
                                                    <label>&nbsp; Address</label>
                                                <p><input type="text" name="Address" required></p>
                                                </div>

                                                <div class="form-group">
                                                    <label> &nbsp;Phone</label>
                                                <p><input type="tel" name="Phone" required ></p>
                                                </div>

                                                <p>
                                                    <textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        {{-- <strong>Your order Details</strong> --}}
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                <thead>

                                <tbody class="order-details-body">
                                    @foreach ($ProductCart as $ProductCart)
                                        <tr>
                                            <td class="product-name">{{ $ProductCart->productName }}</td>
                                            <td class="product-price">{{$ProductCart->productPrice * $ProductCart->Quantity}} JD</td>

                                            <input type="hidden" name="ProductName" value="{{ $ProductCart->productName }}">
                                            <input type="hidden" name="ProductPrice" value="{{ $ProductCart->productPrice }}">
                                        </tr>
                                    @endforeach
                                </tbody>
                                <thead>
                                    <tr>
                                        <th>Laborer</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                @foreach ($laborCart as $laborCart)
                                    <tr>
                                        <td class="product-name">{{ $laborCart->LaborFName }}</td>
                                        <td class="product-price">{{ $laborCart->Price }} JD</td>

                                        <input type="hidden" name="LaborFName" value={{ $laborCart->LaborFName }}><input type="hidden" name="LaborPrice" value={{ $laborCart->Price }} >
                                    </tr>
                                @endforeach
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>Truck</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

								@foreach ($trucksCart as $trucksCart)
                                    <tr>
										<td>Truck Num.{{ $trucksCart->Truck_id }}</td>
										<td class="product-price">{{ $trucksCart->Price * $trucksCart->Quantity }} JD</td>

                                        <input type="hidden" name="Truck" value={{ $trucksCart->Truck_id }}
                                        >
                                        <input type="hidden" name="TruckPrice" value={{ $trucksCart->Price * $trucksCart->Quantity }}>
                                    </tr>
                                @endforeach

                                </tbody>

                            <tbody class="checkout-details">
                                <tr>
                                    <td>Total</td>
                                    <td>{{Session::get('$A') + Session::get('$B') + Session::get('$C')  }}</td><input type="hidden" name="Total" value={{Session::get('$A') + Session::get('$B') + Session::get('$C')  }}>
                                </tr>
                            
                            </tbody>
                        </table>
                        <br>
                        <button type="submit" class="btn" style="background-color:#F28123">Place Order</button>                                           
                       </form>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end check out section -->

@endsection
