@extends('layout.Master')
@section('title, Shop')

@section('content')

    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/steps.css') }}">
    <style>
       
       .button {
            background-color: #F28123;
            border:none;
            font-size:20px;
        }

        .button:hover {
            background-color: #F28123;
            opacity: 0.8;
            color: #ffffff;
        }


        .previous {
            background-color: #8c8a8a82;
            border:none;
            font-size:20px;
        }

        .previous:hover {
            background-color: #8c8a8a82;
            opacity: 0.8;
            color: #ffffff;
        }

        /* Make circles that indicate the steps of the form: */
        .steps {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #cac7c7;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .steps.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .steps.finish {
            background-color: #F28123;
        }
    </style>

    <body>

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>all you need to move</p>
                            <h1>Shop</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <ol class="ol-cards alternate" style="margin-left: 12%;">
            <li style="--ol-cards-color-accent:#f68121">
                <div class="step"><i class="fa fa-truck"></i></div>
                <div class="title">Step Three</div>
                <div class="content">Here You Can Choose What Suits Your Needs From Trucks,To do Your Packaging From Here And Then Add Them To The Cart.</div>
            </li>
        </ol>

        <form>
            <div class="tab">
                Trucks
                <section class="section-style">
                    <div class="board-wrapper">
                        <div class="board-inner">
                            <div class="latest-news mt-200 mb-200">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($trucks as $trucks)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-latest-news">
                                                    <div>
                                                        <a href={{ url('SingleTruck/id/' . $trucks->Truck_id) }}
                                                            name="Truck_id ">
                                                            <img src={{ $trucks->TruckImg }} alt="product"
                                                                class="latest-news-bg" name="TruckImg">
                                                        </a>
                                                    </div>
                                                    <div class="news-text-box">
                                                        <h3 class="blog-meta">{{ $trucks->Truck_Title }}</h3>
                                                        <p class="blog-meta">PRICE :{{ $trucks->Price }} JD<span
                                                                class="author"></p>
                                                        <a href="{{ url('SingleTruck/id/' . $trucks->Truck_id) }}" class="btn"
                                                            style="background-color: #F28123;">See More Details<i
                                                                class="fas fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <a href="/ShopLabor" class="previous btn btn-primary">Previous</a>
                    <a href="/Cart" class="button btn btn-primary">Next</a>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;margin-bottom:2%">
                <span class="steps finish"></span>
                <span class="steps finish"></span>
                <span class="steps finish"></span>
            </div>
        </form>
    </body>

    </html>
@endsection
