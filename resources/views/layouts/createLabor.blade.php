@extends('layouts.master')
@section('title', 'Add Labor')
@section('content')

    <html>
    <link rel="stylesheet" href="{{ asset('/css/Addbox.css') }}">

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card ">
                        <div class="card-header">
                            <h4 style="text-align:center; color:white"> Add Labroer</h4>
                        </div>
                        <div class="card-body ml-5">

                            <form action="{{ url('createLabor') }}"method="post">
                                @csrf
                                <div class="row mb-3 ml-5">
                                        <label for="name" class="form-label">Laborer First Name</label>
                                        <input type="text" class="col-8" name="LaborFName" required
                                            autofocus>
                                </div>

                                <div class="row mb-3 ml-5">
                                        <label for="name" class="form-label">Laborer Last Name</label>
                                        <input type="text" class="col-8" name="LaborLName"  required
                                            autofocus>
                                </div>

                                <div class="row mb-3 ml-5">
                                        <label class="form-label">Price</label>
                                        <input class="col-8" type="number" name="Price"
                                            required autofocus>
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
