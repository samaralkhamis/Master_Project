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


        .previous {
            background-color: #8c8a8a82;
            border: none;
            font-size: 20px;
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
        @if (session()->has('Teammessage'))
            <div class="container mt-5 alert alert-success text-left ">
                {{ session()->get('Teammessage') }}
            </div>
        @endif
        <ol class="ol-cards alternate" style="margin-left: 12%;">

            <li style="--ol-cards-color-accent:#f68121">
                <div class="step"><i class="fa fa-user"></i></div>
                <div class="title">Step Two</div>
                <div class="content">Here You Can Choose What Suits Your Needs From laborers,To do Packaging From Here And
                    Then Add Them To The Cart. </div>
            </li>
        </ol>

        <form>
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
                                                        <form action="{{ url('/CreateLCart') }}" method="post">

                                                            @csrf
                                                            <input type="hidden" name="Labor_id"
                                                                value={{ $labor->Labor_id }}>
                                                            <input type="hidden" name="LaborFName"
                                                                value={{ $labor->LaborFName }}>
                                                            <input type="hidden" name="LaborLName"
                                                                value={{ $labor->LaborLName }}>
                                                            <input type="hidden" name="Price" value={{ $labor->Price }}>

                                                            <h3 name="LaborFName">
                                                                {{ $labor->LaborFName }}
                                                            </h3>
                                                            <p class="blog-meta">
                                                                <strong>PRICE :{{ $labor->Price }} JD</strong>
                                                            </p>
                                                            <p class="blog-meta">
                                                                {{ $labor->LaborLName }}
                                                            </p>
                                                            <button type="submit" style="background-color: #F28123;border:#F28123">Add To
                                                                Cart <i class="fas fa-angle-right"></i></button>
                                                        </form>
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
                <div style="float:center;">
                    <a href="/Shop" class="previous btn btn-primary">Previous</a>
                    <a href="/ShopTruck" class="button btn btn-primary">Next</a>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;margin-bottom:2%">
                <span class="steps finish"></span>
                <span class="steps finish"></span>
                <span class="steps"></span>
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
