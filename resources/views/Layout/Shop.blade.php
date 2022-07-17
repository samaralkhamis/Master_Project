@extends('layout.Master')
@section('title, Shop')

@section('content')
    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        body {
            background-color: #e3dada;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #04AA6D;
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
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
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
            background-color: #04AA6D;
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
                <div class="col-md-12 col-md-7 ">
                    <div class="booking-form">
                        <form>
                            {{-- <div class="form-group">
                    <p class="text mb-1">start Time</p>
                    <input class="form-control mb-3" type="text" placeholder="Name" />
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <span class="form-label ">Pick Up Location</span>
                            <select name="Jordan">
                            <option value="Aqaba">Aqaba</option>
                            <option value="Ma'an">Ma'an</option>
                            <option value="Altafelah">Altafelah</option>
                            <option value="Alkarak">Alkarak</option>
                            <option value="Amman">Amman</option>
                            <option value="jarash">Jarash</option>
                            <option value="Alzarqaa">Alzarqaa</option>
                            <option value="Madaba">Madaba</option>
                            <option value="Alsalt">Alsalt</option>
                            <option value="Almafraq">Almafraq</option>
                            <option value="Irbid">Irbid</option>
                            <option value="Ajloun">Ajloun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <span class="form-label ">Pick Up Location</span>
                            <select name="Jordan">
                            <option value="Aqaba">Aqaba</option>
                            <option value="Ma'an">Ma'an</option>
                            <option value="Altafelah">Altafelah</option>
                            <option value="Alkarak">Alkarak</option>
                            <option value="Amman">Amman</option>
                            <option value="jarash">Jarash</option>
                            <option value="Alzarqaa">Alzarqaa</option>
                            <option value="Madaba">Madaba</option>
                            <option value="Alsalt">Alsalt</option>
                            <option value="Almafraq">Almafraq</option>
                            <option value="Irbid">Irbid</option>
                            <option value="Ajloun">Ajloun</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
                            {{-- <div class="row"> --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Pick Up Location</span>
                                    <select class="form-control">
                                        <option value="Aqaba">Aqaba</option>
                                        <option value="Ma'an">Ma'an</option>
                                        <option value="Altafelah">Altafelah</option>
                                        <option value="Alkarak">Alkarak</option>
                                        <option value="Amman">Amman</option>
                                        <option value="jarash">Jarash</option>
                                        <option value="Alzarqaa">Alzarqaa</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Alsalt">Alsalt</option>
                                        <option value="Almafraq">Almafraq</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Ajloun">Ajloun</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Drop-Off Location</span>
                                    <select class="form-control">
                                        <option value="Aqaba">Aqaba</option>
                                        <option value="Ma'an">Ma'an</option>
                                        <option value="Altafelah">Altafelah</option>
                                        <option value="Alkarak">Alkarak</option>
                                        <option value="Amman">Amman</option>
                                        <option value="jarash">Jarash</option>
                                        <option value="Alzarqaa">Alzarqaa</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Alsalt">Alsalt</option>
                                        <option value="Almafraq">Almafraq</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Ajloun">Ajloun</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">
                                        Start Time
                                    </span>
                                    <input type="datetime-local" class="form-control">
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                </form>
                </div>
                </div>
            </div>

        <div class="tab">
            <div class="col-md-6">
                boxes & accessories                
            </div>
        </div>
        <div class="tab">
           moving labor
        </div>
        <div class="tab">
          Trucks
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
