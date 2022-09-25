@extends('layouts.master')
@section('title', 'Trucks')
@section('content')


    <div class="container-fluid py-4">
        @if (session()->has('message'))
            <div class="alert alert-success "style="color:white">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <a href="{{ url('createTruck') }}" class="card-link btn w-10 "
                style="background-color:#F28123 ; color:white; margin-left:85%">add</a>
        </div>
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Trucks</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center text-sm">Truck ID</th>
                                    <th class="align-middle text-center text-sm">Image</th>
                                    <th class="align-middle text-center text-sm">Truck Name</th>
                                    <th class="align-middle text-center text-sm">Price</th>
                                    <th class="align-middle text-center text-sm">Description</th>
                                    <th class="align-middle text-center text-sm">Dimention L*W*H</th>
                                    <th class="align-middle text-center text-sm">Deck Height</th>
                                    <th class="align-middle text-center text-sm">Door Opening</th>
                                    <th class="align-middle text-center text-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Truck as $Truck)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="align-middle text-center text-sm">{{ $Truck->Truck_id }}</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <img src="{{ $Truck->TruckImg }}" width="165px">
                                        </td>
                                        <td>
                                            <p class="align-middle text-center mt-5">Truck Num.{{ $Truck->Truck_id }} </p>
                                        </td>

                                        <td class="align-middle text-center ">
                                            <span class="badge bg-gradient-success">{{ $Truck->Price }}</span>
                                        </td>
                                        <td class="align-middle justify text-sm">
                                            <span width="30%">{{ $Truck->TruckDes }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Truck->Dimention_L_W_H }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Truck->Deck_height }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Truck->Door_Opening }} </span>
                                        </td>


                                        <td class="align-middle text-center text-sm">
                                            <a href="{{ url('deleteTruck/id/' . $Truck->Truck_id) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="delete user"><i class="fa fa-trash"
                                                    style="color:red ; font-size:25px" aria-hidden="true"></i></a>

                                            <a href="{{ url('editTruck/id/' . $Truck->Truck_id) }}"><i class="fas fa-edit"
                                                    style="color:green ; font-size:25px"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endsection
