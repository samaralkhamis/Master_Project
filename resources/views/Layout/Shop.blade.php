@extends('layout.Master')
@section('title, Shop')

@section('content')
    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
       

        #regForm {
            background-color: #b5b3b3;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #eeadad;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #F28123;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #cac7c7;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #cac7c7;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
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

        <form id="regForm" action="">
            <h1>Laravel 8 Step Form User Register:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <a href="/Reservation"> Go to Reserve a Date</a>
            </div>

            <div class="tab">
                <section class="section-style">
                    <div class="board-wrapper">
                        <div class="board-inner">
                            <div class="latest-news mt-200 mb-200">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($product as $data)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-latest-news">
                                                    <a href="">
                                                        <input type="hidden" name="product_id" value={{$data->product_id}}>
                                                        <div>
                                                            <img src={{ $data->productImg }} alt="product" name="productImg" class="latest-news-bg">
                                                        </div>
                                                    </a>
                                                    <div class="news-text-box">
                                                        <h3><a href="/SingleProduct/id/{{$data->product_id}}" name="productName">{{ $data->productName }} </a></h3>
                                                        <p class="blog-meta"><i class="fas fa-dollar-sign"></i>PRICE :
                                                            <span class="author" name="productPrice">   {{ $data->productPrice}} JD
                                                             </span>
                                                        </p>
                                                        {{-- <a href="" class="btn" style="background-color: #F28123;">Add To Cart <i
                                                                class="fas fa-angle-right"></i></a> --}}
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
            <div class="tab">
                <section class="section-style">
                    <div class="board-wrapper">
                        <div class="board-inner">
                            <div class="latest-news mt-200 mb-200">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($labor as $labor)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-latest-news">
                                                    <div class="news-text-box">
                                                        <h3><a href="/SingleLabor/id/{{$labor->Labor_id}}" name="LaborFName">{{ $labor->LaborFName }}-{{ $labor->LaborLName}} </a></h3>
                                                        <p class="blog-meta"><i class="fas fa-dollar-sign"></i>Availabilty (status) :
                                                            <span class="author">   {{ $labor->Status }} JD
                                                            </span>
                                                        </p>
                                                        {{-- <p class="excerpt">{{ $labor->productDescription }}</p>
                                                        <p class="excerpt">Category : Product /{{ $labor->productCategory }}</p>
                                                        <a href="" class="btn" style="background-color: #F28123;">Add To Cart <i
                                                                class="fas fa-angle-right"></i></a>  --}}
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
                                                        <a href={{url('SingleTruck/id/'.$trucks->Truck_id)}} name="Truck_id ">
                                                        <img src={{ $trucks->TruckImg }} alt="product"  class="latest-news-bg" name="TruckImg">
                                                        </a>
                                                    </div>
                                                
                                                <div class="news-text-box">
                                                    <p class="blog-meta"><i class="fas fa-dollar-sign"></i>PRICE :<span class="author"></p>  
                                                    <p class="excerpt"><span  name="TruckDes"> {{ $trucks->TruckDes }}</span></p>
                                                    <p class="excerpt" >Dimention :<span name="Dimention"> {{ $trucks->Dimention_L_W_H }}</span> </p>
                                                    <p class="excerpt" >Deck_height  : <span name="Deck_height">{{ $trucks->Deck_height }} </span></p>
                                                    <p class="excerpt" name="Door_Opening">Door_Opening :{{ $trucks->Door_Opening }}  </p>
                                                    <a href="" class="btn" style="background-color: #F28123;">Add To Cart <i
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
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab
            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace("active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>
    </body>

    </html>
@endsection
