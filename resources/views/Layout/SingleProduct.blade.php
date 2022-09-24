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
@foreach ($SingleProduct as $SingleProduct )
	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<form action="{{url('/CreateCart')}}" method="post">
		<div class="container">
			<div class="row">
				
				<div class="col-md-5">
					<div class="single-product-img">
						@csrf
						<input type="hidden" name="product_id" value={{$SingleProduct->product_id}}>
						<input type="hidden" name="productImg" value={{$SingleProduct->productImg}}>
						<img src={{$SingleProduct->productImg}} alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<p  class="single-product-pricing">{{$SingleProduct->productName}}</p>
						<input type="hidden" name="productName" value={{$SingleProduct->productName}}>
						<h4>Price : {{$SingleProduct->productPrice}}</h4>
						<p><strong>Categories: </strong>{{$SingleProduct->productCategory}}</p>
						<input type="hidden" name="productPrice" value={{$SingleProduct->productPrice}}>
						<p><strong>Description: </strong>{{$SingleProduct->productDescription}}</p>
						<div class="single-product-form">

								<input type="number" placeholder="1" name="Quantity" required>
						
							<button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
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