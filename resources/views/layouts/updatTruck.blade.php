@extends('layouts.master')
@section('title', 'update Truck')
@section('content')

    <html>
    <link rel="stylesheet" href="{{ asset('/css/Addbox.css') }}">

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="text-align:center ; color:white"> Update Truck </h4>
                        </div>
                        <div class="card-body ml-5">
                            @foreach ($update as $data)
                                <form action="{{ url('/updateTruck/id/' . $data->Truck_id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    {{-- <div class="row mb-3 ml-5">
                                        <label  class="form-label">Truck Name</label>
                                        <input type="text" class="col-8" name="productName"
                                            value="{{ $data->TruckName }}" required autofocus>
                                    </div> --}}
                                    <label class="form-label  ml-5">Image</label>
                                    <img src="{{ $data->TruckImg }}" class="ml-5 mb-3" width="200px">

                                    <div class="row mb-3 ml-5">
                                        <label class="form-label">Dimention L * W * H </label>
                                        <input type="text" class="col-8" name="Dimention_L_W_H"
                                            value="{{ $data->Dimention_L_W_H }}" required autofocus>
                                    </div>

                                    <div class="row mb-3 ml-5">
                                        <label class="form-label">Truck Deck Height</label>
                                        <input type="text" class="col-8" name="Deck_height"
                                            value="{{ $data->Deck_height }}" required autofocus>
                                    </div>

                                    <div class="row mb-3 ml-5">
                                        <label class="form-label">Truck Door Opening </label>
                                        <input type="text" class="col-8" name="Door_Opening"
                                            value="{{ $data->Door_Opening }}" required autofocus>
                                    </div>

                                    <div class="row mb-3 ml-5">
                                        <label class="form-label">Price</label>
                                        <input class="col-8" type="number" name="Price" value="{{ $data->Price }}"
                                            required autofocus>
                                    </div>

                                    <div class="row mb-3 ml-5">
                                        <label class="form-label">Description</label>
                                        <textarea name="TruckDes" class="col-8">{{ $data->TruckDes }}
                            </textarea>
                                    </div>
                                    <div class="row mb-0 ml-5">
                                            <button type="submit" class="btn btn-primary col-8 ">SUBMIT</button>
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
