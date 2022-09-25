@extends('layouts.master')
@section('title', 'Add Box')
@section('content')

    <html>
    <link rel="stylesheet" href="{{ asset('/css/Addbox.css') }}">

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card ">
                        <div class="card-header">
                            <h4 style="text-align:center; color:white"> Add Product [ Boxes & Accessories ] </h4>
                        </div>
                        <div class="card-body ml-5">

                            <form action="{{ url('createBox') }}"method="post">
                                @csrf
                                <div class="row mb-3 ml-5">
                                        <label for="name" class="form-label">Product Name</label>
                                        <input type="text" class="col-8" name="productName" value="{{ old('productName') }}" required
                                            autofocus>
                                        <span style="color: red;">
                                            @error('productName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>

                                <div class="row mb-3 ml-5 ">
                                    <label for="front_id_pic" class="form-label">Image</label>
                                    <input type="file" class="col-8" name="productImg" placeholder="Image" required>
                                </div>

                                <div class="row mb-3 ml-5">
                                        <label for="name" class="form-label">Product Category</label>
                                        <input type="text" class="col-8" name="productCategory" value="{{ old('productCategory') }}"
                                            required autocomplete="name" autofocus required>
                                        <span style="color: red;">
                                            @error('productCategory')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>

                                <div class="row mb-3 ml-5">
                                        <label for="phone_num" class="form-label">Product Price</label>
                                        <input id="productPrice" class="col-8" type="number" name="productPrice"
                                            value="{{ old('productPrice') }}" required autofocus >
                                        <span style="color: red;">
                                            @error('productPrice')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>


                                <div class="row mb-3 ml-5">
                                        <label for="productDescription" class="form-label">Description</label>
                                        <textarea name="productDescription" class="col-8" placeholder="Product Description" rows="3" required>
                                        </textarea>
                                </div>


                                    <div>
                                        <button type="submit" class="btn btn-primary col-8 ml-5" > SUBMIT </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
