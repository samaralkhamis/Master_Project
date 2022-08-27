
@extends('layout.Master')
@section('title, Cart')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
				<div>
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Boxes & Accessories </th>
									<th class="product-name">Product Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-total">Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$A = 0 ;
								$B = 0 ;
								$C = 0 ; 
								?>
								@foreach ($ProductCart as $ProductCart)
								<tr class="table-body-row">
									<td>{{ $ProductCart->Product_id }}</td>
									<td class="product-image"><img src={{ $ProductCart->productImg }}></td>
									<td class="product-name">{{ $ProductCart->productName }}</td>
									<td class="product-price">{{ $ProductCart->productPrice }} JD</td>
									<td > 
									<input type="number" name="Quantity" value={{ $ProductCart->Quantity }}>
									{{-- <a class="btn btn-increase" href="#" wire:click.prefetch="IncreaseQuantity({{ $ProductCart->Quantity }})">+</a> --}}
									</td>
									<td class="product-total">{{$ProductCart->productPrice * $ProductCart->Quantity}} JD </td>

								
									<td class="align-middle text-center text-sm">
										<a href="{{url('DeletePro/id/'.$ProductCart->Product_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete Product"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a>
									</td>
									
									<?php 
									$A += ($ProductCart->productPrice * $ProductCart->Quantity) ;	
									Session::put('$A', $A);
									?>
									
								</tr>
								@endforeach
							
							</tbody>
						</table>
					</div>
					<br>
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Transport laborer </th>
									<th class="product-name">Product Name</th>
									<th class="product-price">Price</th>
									<th class="product-total">Total</th>
									<th class="product-total">Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($laborCart as $laborCart)
								<tr class="table-body-row">
									<td>{{ $laborCart->Labor_id }}</td>
									<td> Package </td>
									{{-- <td>{{ $laborCart->Labor_id }}</td> --}}
									<td class="product-name">{{ $laborCart->LaborFName }}</td>
									<td class="product-price">{{ $laborCart->Price }}</td>									
									<td class="product-total">{{ $laborCart->Price }}</td>
									<td class="align-middle text-center text-sm">
										<a href="{{url('DeleteLabor/id/'.$laborCart->Labor_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete Product"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<br>
			
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Transport Trucks </th>
									{{-- <th class="product-name">Product Name</th> --}}
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-total">Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($trucksCart as $trucksCart)
								<tr class="table-body-row">
									<td>{{ $trucksCart->Truck_id }}</td>
									<td class="product-image"><img src={{ $trucksCart->TruckImg }}></td>
									{{-- <td class="product-name">{{ $trucksCart->productName }}</td> --}}
									<td class="product-price">{{ $trucksCart->Price }} JD</td>
									<td> <input type="number" value={{ $trucksCart->Quantity }} ></td>
									<td class="product-total">{{ $trucksCart->Price * $trucksCart->Quantity }} JD </td>
									<td class="align-middle text-center text-sm">
										<a href="{{url('DeleteTruck/id/'.$trucksCart->Truck_id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete Product"><i class="fa fa-trash" style="color:red" aria-hidden="true"></i></a>
									</td>
								</tr>
								<?php
								$B =+ ($trucksCart->Price * $trucksCart->Quantity) ;
								Session::put('$B', $B);
								?>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>	
				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									@if(isset($B) && isset($A))
										<td>{{$A + $B}} JD </td>
									@elseif (isset($A))
										<td>{{ $A}} JD </td>
									@else 
										<td> 0 JD </td>
									@endif
								</tr>
								
								
								
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Update Cart</a>
							<a href="/Checkout" class="boxed-btn black">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

    @endsection