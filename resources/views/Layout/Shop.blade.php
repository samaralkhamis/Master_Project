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
            border: none;
            font-size: 20px;
        }

        .button:hover {
            background-color: #F28123;
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
                <div class="step"><i class="fab fa-codepen"></i></div>
                <div class="title">Step One</div>
                <div class="content">Here You Can Choose What Suits Your Needs From The Boxes, Packaging and Accessories
                    Found Here And Then Add Them To The Cart. </div>
            </li>
        </ol>

        <div class="product-section mt-5 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".BOX">BOX</li>
                                <li data-filter=".PACKING">PACKING</li>
                                <li data-filter=".PACKAGES">PACKAGES</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form>
                    {{-- <div class="row"> --}}
                    {{-- <aside class="col-sm-1">
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Labels</span></h2>
                                    <div class="singleleft_inner">
                                        <h5 style="padding:25px">Categories</h5>
                                        <ul type="none" style="line-height: 30px">
                                            <li><a href="#" style="color:#F28123;font-size:15px"><i
                                                        class="fab fa-codepen"><strong>BOXES</strong></i></a></li>
                                            <li><a href="#" style="color:#F28123;font-size:15px"><i
                                                        class="fab fa-codepen"><strong>PACKING</strong></i></a></li>
                                            <li><a href="#" style="color:#F28123;font-size:15px"><i
                                                        class="fab fa-codepen"><strong>PACKAGES</strong></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </aside> --}}

                    <div class="row product-lists">
                        @foreach ($product as $data)
                            <div class="col-lg-3 col-md-3 text-center {{ $data->productCategory }}">
                                <div class="single-product-item" style="background-color: #f0f0f0b0;">
                                    <div class="single-latest-news">
                                        <a href="/SingleProduct/id/{{ $data->product_id }}">
                                            <input type="hidden" name="product_id" value={{ $data->product_id }}>
                                            <div>
                                                <img src={{ $data->productImg }} alt="product" name="productImg"
                                                    class="latest-news-bg">
                                            </div>
                                        </a>
                                        <div class="news-text-box">
                                            <h3><a href="/SingleProduct/id/{{ $data->product_id }}"
                                                    name="productName">{{ $data->productName }}
                                                </a>
                                            </h3>
                                            <p class="blog-meta"><i class="fas fa-dollar-sign"></i>PRICE
                                                :
                                                <span class="author" name="productPrice">
                                                    {{ $data->productPrice }} JD
                                                </span>
                                            </p>
                                            <a href="/SingleProduct/id/{{ $data->product_id }}" class="btn"
                                                style="background-color: #F28123;">See
                                                More
                                                Details<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>


        </section>

        {{-- </div> --}}

        <div style="overflow:auto;">
            <div style="float:right;">
                <a href="/ShopLabor" class="button btn btn-primary">Next</a>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;margin-bottom:2%">
            <span class="steps finish"></span>
            <span class="steps"></span>
            <span class="steps"></span>
        </div>

        </div>
        </div>
        </section>
    </body>

    </html>
@endsection
