@extends('layout.Master')
@section('title, Blog')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div
        style="background-size: cover; background-position: center center; position: relative; z-index: 1; background-attachment: fixed; padding-top: 200px;">
        <div style="position: absolute; left: 0; top: 0; width: 100%; height: 50%; background-color: #07212e;">
        </div>
    </div>
    <div class="container mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="receipt bg-white p-3 rounded">
                    <h4 class="mt-2 mb-3">Your order is confirmed!</h4>
                    <h6 class="name">Hello {{ Auth::user()->name }}</h6><span class="fs-12 text-black-50">your order has
                        been confirmed and will be shipped in two days </span>
                    <hr>
                    <div class="d-flex flex-row justify-content-between align-items-center order-details">
                        <div><span class="d-block fs-12">Order number</span><span class="font-weight-bold">OD44434324</span>
                        </div>
                        <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold">Cash On
                                Delivery</span><img class="ml-1 mb-1"
                                src="https://img.freepik.com/premium-vector/cash-delivery_569841-123.jpg?w=2000"
                                width="50"></div>
                    </div>
                    <hr>
                    <div class="mt-3 amount row">
                        <div class="d-flex col-md-6"><img
                                src="https://www.hellotech.com/guide/wp-content/uploads/2020/05/HelloTech-qr-code.jpg"
                                width="250" height="250"></div>
                        <div class="col-md-6">
                            <div class="billing">
                                <div class="d-flex justify-content-between"><span>Subtotal</span><span
                                        class="font-weight-bold">{{ Session::get('$A') + Session::get('$B') + Session::get('$C') }}
                                        JD</span></div>
                                <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span
                                        class="font-weight-bold">10 JD</span></div>
                                <hr>
                                <div class="d-flex justify-content-between mt-1"><span
                                        class="font-weight-bold">Total</span><span
                                        class="font-weight-bold text-success">
                                        <strong style="color:#F28123">{{ Session::get('$A') + Session::get('$B') + Session::get('$C') + 10 }} JD
                                        </strong>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="d-block mt-3 text-black-50 fs-15">We will be sending a shipping
                        confirmation email when the item is shipped!</span>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center footer">
                        <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span>
                            <span style="color:#F28123">Furnture Map Team</span></div>
                        <div class="d-flex flex-column justify-content-end align-items-end"><span
                                class="d-block font-weight-bold">Need Help?</span><span>Call +00 111 222 3333</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{Session::put('$A', 0)}}
    {{Session::put('$B', 0)}}
    {{Session::put('$C', 0)}}
@endsection
