@extends('layout.Master')

@section('content')
    <div
        style="background-size: cover; background-position: center center; position: relative; z-index: 1; background-attachment: fixed; padding-top: 200px;">
        <div style="position: absolute; left: 0; top: 0; width: 100%; height: 50%; background-color: #07212e;">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="osahan-account-page-left shadow-sm bg-white h-100">
                    <div class="border-bottom p-4">
                        <div class="osahan-user text-center">
                            <div class="osahan-user-media">
                                <img class="mb-3 rounded-pill shadow-sm mt-1"
                                    src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg"
                                    alt="gurdeep singh osahan">
                                <div class="osahan-user-media-body">
                                    <h6 class="mb-2">{{ Auth::user()->name }}</h6>
                                    <p class="mb-1">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                        <li class="nav-item text-center">
                            <a href="/Shop"  class="nav-link" id="orders-tab" data-toggle="tab" role="tab"style="color:#F28123"><i class="fa fa-truck" aria-hidden="true"></i>
                                &nbsp; Make New Order</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane  fade  active show" id="orders" role="tabpanel"
                            aria-labelledby="orders-tab">
                            <h3 class="font-weight-bold mt-0 mb-4">Past Orders</h3>
                            <div class="bg-white card mb-4 order-list shadow-sm">
                                @foreach ($profile as $profile)
                                    <div class="gold-members p-4">
                                        <a href="#">
                                        </a>
                                        <div class="media">
                                            <a href="#">
                                                
                                            </a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <strong class="float-right" style="color:#F28123">Delivered on
                                                        {{ $profile->created_at->addDays(1) }}<i
                                                            class="icofont-check-circled text-success"></i></strong>
                                                </a>
                                                <h6 class="mb-2">
                                                    <a href="#" style="color:#F28123">Orders Delivered </a>
                                                </h6>
                                                <p class="text-gray mb-2"><i class="fa fa-list-alt" aria-hidden="true"></i>
                                                    ORDER Number.{{ $profile->order_id }}
                                                </p>
                                                <p class="text-gray mb-2"><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i>
                                                    Delivered in {{ $profile->Address }}
                                                </p>
                                                <p>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    Date Of Order:{{ $profile->created_at }}
                                                </p>
                                                <hr>
                                                <h5>User Information </h5>
                                                <p>
                                                    <i class="fa fa-address-card" aria-hidden="true"></i>

                                                    User Name :{{ $profile->Name }}
                                                </p>
                                                <p>
                                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                                    User Phone :{{ $profile->Phone }}
                                                </p>
                                                <p>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    User Email:{{ $profile->Email }}
                                                </p>
                                                <hr>
                                                <strong class="float-right" style="color:#F28123" > Total Paid:</span> {{ $profile->Total }} JD
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
