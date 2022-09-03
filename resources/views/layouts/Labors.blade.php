@extends('layouts.master')
@section('title','Labor')
@section('content')


<div class="container-fluid py-4">
    <div class="row">
        <a href="{{url('createLabor')}}" class="card-link btn w-10 " style="background-color:#F28123 ; color:white; margin-left:85%">add</a>
        </div>
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Labors</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="align-middle text-center text-sm">Labor ID</th>
                    <th class="align-middle text-center text-sm">Labor First Name</th> 
                    <th class="align-middle text-center text-sm">Labor Last Name</th>                    
                    <th class="align-middle text-center text-sm">Price</th>
                    <th class="align-middle text-center text-sm">Time Availabity</th>
                    <th class="align-middle text-center text-sm">Action</th>
                  </tr>
                </thead>
                <tbody> 
                  
                  @foreach($Labor as $Labor)
                  <tr>
                    <td>
                        <div class="align-middle text-center text-sm">
                          <h6 class="align-middle text-center text-sm">{{$Labor->Labor_id }}</h6>
                        </div>
                    </td>
                    <td>
                      <p class="align-middle text-center text-sm">{{$Labor->LaborFName}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span>{{$Labor->LaborLName}} </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$Labor->Price}}</span>
                    </td>                  
                    
                    <td class="align-middle text-center text-sm">
                      {{-- <span>{{$Labor->created_at}} </span> --}}
                    </td>                     
                    
                    <td class="align-middle text-center text-sm">
                      <a href="{{url('deleteLabor/id/'.$Labor->Labor_id )}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="delete user"><i class="fa fa-trash" style="color:red ; font-size:25px" aria-hidden="true"></i></a>

                      <a href="{{url('editus/id/'.$Labor->Labor_id )}}"><i class="fas fa-edit" style="color:green ; font-size:25px"></i> 
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