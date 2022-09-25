@extends('layouts.master')
@section('title', 'Trucks')
@section('content')


    <div class="container-fluid py-4 mb-5">

        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Orders</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center text-sm">Order ID</th>
                                    <th class="align-middle text-center text-sm">User Name</th>
                                    <th class="align-middle text-center text-sm">User Phone</th>
                                    <th class="align-middle text-center text-sm">User Address</th>
                                    <th class="align-middle text-center text-sm">Total</th>
                                    <th class="align-middle text-center text-sm">Order Time</th>
                                    <th class="align-middle text-center text-sm">Delivered Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($Order as $Order)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="align-middle text-center text-sm">{{ $Order->order_id }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="align-middle text-center text-sm">{{ $Order->Name }} </p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Order->Phone }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Order->Address }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{ $Order->Total }}</span>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Order->created_at }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $Order->updated_at}} </span>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endsection
