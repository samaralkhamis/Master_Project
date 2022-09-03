@extends('layouts.master')
@section('title','update Boxes & Accessories')
@section('content')

    <html>
        <link rel="stylesheet" href="{{ asset('/css/Addbox.css') }}">

    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header"> <h4 style="text-align:center ; color:white"> Update Boxes & Accessories </h4>
                    </div>
                    <div class="card-body ml-5" style="margin-top:-2%" >
                    @foreach($update as $data)
                        <form action="{{url('/updateBox/id/'.$data->product_id)}}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="row mb-3 ml-5">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="col-8" name="productName" value="{{$data->productName}}" required
                                autofocus>
                    </div>
                       <label class="form-label ml-5">Image</label>
                        <img src="{{$data->productImg}}" width="200px">

                    <div class="row mb-3 ml-5">
                            <label for="name" class="form-label">Product Category</label>
                            <input type="text" class="col-8" name="productCategory" value="{{ $data->productCategory}}"
                                required autocomplete="name" autofocus>
                    </div>

                    <div class="row mb-3 ml-5">
                            <label for="phone_num" class="form-label">Product Price</label>
                            <input id="productPrice" class="col-8" type="number" name="productPrice"
                                value="{{$data->productPrice}}" required autofocus>
                    </div>

                    <div class="row mb-3 ml-5">
                            <label for="productDescription" class="form-label">Description</label>
                            <textarea name="productDescription" class="col-8" >{{$data->productDescription}}
                            </textarea>
                    </div>
                            <div class="row mb-0 ml-5 ">
                                <div class="col-md-4 offset-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block col-8 ">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </body>
    </html>
    @endsection
    