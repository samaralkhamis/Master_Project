@extends('layouts.master')
@section('title', 'Boxes & Accessories')
@section('content')


    <div class="container-fluid py-4">
        @if (session()->has('messageRej'))
            <div class="alert alert-success "style="color:white">
                {{ session()->get('messageRej') }}
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success "style="color:white">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <a href="{{ url('createBox') }}" class="card-link btn w-10 "
                style="background-color:#F28123 ; color:white; margin-left:85%">add</a>
        </div>
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Boxes & Accessories</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center text-sm">Product ID</th>
                                    <th class="align-middle text-center text-sm">Image</th>
                                    <th class="align-middle text-center text-sm">Product Name</th>
                                    <th class="align-middle text-center text-sm">Price</th>
                                    <th class="align-middle text-center text-sm">Description</th>
                                    <th class="align-middle text-center text-sm">Category</th>
                                    <th class="align-middle text-center text-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="align-middle text-center text-sm">{{ $product->product_id }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ $product->productImg }}" width="150px">
                                        </td>
                                        <td>
                                            <p class="align-middle text-center text-sm my-5">{{ $product->productName }}
                                            </p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="badge bg-gradient-success">{{ $product->productPrice }}</span>
                                        </td>
                                        <td class="align-middle justify text-sm">
                                            <span>{{ $product->productDescription }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span>{{ $product->productCategory }} </span>
                                        </td>


                                        <td class="align-middle text-center text-sm">
                                            <a href="{{ url('deleteBox/id/' . $product->product_id) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="delete user"><i class="fa fa-trash"
                                                    style="color:red ; font-size:25px" aria-hidden="true"></i></a>

                                            <a href="{{ url('editBox/id/' . $product->product_id) }}"><i class="fas fa-edit"
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
