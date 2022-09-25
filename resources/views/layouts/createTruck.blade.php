@extends('layouts.master')
@section('title', 'Add Truck')
@section('content')

    <html>
    <link rel="stylesheet" href="{{ asset('/css/Addbox.css') }}">

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="text-align:center; color:white"> Add Truck</h4>
                        </div>
                        <div class="card-body ml-5">

                            <form action="{{ url('createTruck') }}"method="post">
                                @csrf

                                <div class="row mb-3 ml-5 ">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="col-8" name="TruckImg" placeholder="Image" required>
                                </div>

                                <div class="row mb-3 ml-5">
                                    <label for="name" class="form-label">Truck Dimention L * W * H</label>
                                    <input type="text" class="col-8" name="Dimention_L_W_H" required autofocus>
                                </div>

                                <div class="row mb-3 ml-5">
                                    <label for="name" class="form-label">Truck Deck Height</label>
                                    <input type="text" class="col-8" name="Deck_height" required autofocus>
                                </div>

                                <div class="row mb-3 ml-5">
                                    <label for="name" class="form-label">Truck Door Opening</label>
                                    <input type="text" class="col-8" name="Door_Opening" required autofocus>
                                </div>

                                <div class="row mb-3 ml-5">
                                    <label class="form-label">Price</label>
                                    <input class="col-8" type="number" name="Price" required autofocus>
                                </div>


                                <div class="row mb-3 ml-5">
                                    <label class="form-label">Description</label>
                                    <textarea name="TruckDes" class="col-8" rows="3">
                                    </textarea>
                                </div>


                                <div>
                                    <button type="submit" class="btn btn-primary col-8 ml-5"> SUBMIT </button>
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
