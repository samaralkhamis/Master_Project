@extends('layout.Master')
@section('title, Shop')

@section('content')

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

            <div class="tab">
                <div class="col-md-12 col-md-7 ">
                    <div class="booking-form">
                        <form action="{{url('Reservation')}}"method="post">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Pick Up Location</span>
                                    <select class="form-control" name="PickupLocation">
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
                                    <select class="form-control" name="DropOffLocation">
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
                                    <input type="datetime-local" class="form-control" name="StartTime">
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">SUBMIT
                            </button>
                        </form>
                        {{-- <button> <a href="/Shop">submit</a></button> --}}
                    </div>
                </div>
            
@endsection
