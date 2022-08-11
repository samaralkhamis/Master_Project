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
@foreach ($SingleTruck as $SingleTruck )
	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<form action="{{url('/CreateTCart')}}" method="post">
		<div class="container">
			<div class="row">
				
				<div class="col-md-5">
					<div class="single-product-img">
						@csrf
						<input type="hidden" name="Truck_id" value={{$SingleTruck->Truck_id}}>
						<input type="hidden" name="TruckImg" value={{$SingleTruck->TruckImg}}>
						<img src={{$SingleTruck->TruckImg}} alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						{{-- <h3>{{$SingleTruck->productName}}</h3>
						<input type="hidden" name="productName" value={{$SingleTruck->productName}}> --}}
						<p class="single-product-pricing">Price : {{$SingleTruck->Price}}</p>
						<input type="hidden" name="Price" value={{$SingleTruck->Price}}>
						<p>{{$SingleTruck->TruckDes}}</p>
						<div class="single-product-form">

								<input type="number" placeholder="1" name="Quantity" value="1">
						
							<button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							{{-- <p><strong>Categories: </strong>{{$SingleTruck->productCategory}}</p> --}}
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</form>
	</div>
	<!-- end single product -->
	@endforeach
	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection