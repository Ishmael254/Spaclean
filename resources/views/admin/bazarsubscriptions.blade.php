@extends('layouts.admin')
@section('content')


<div class="pcoded-content">

      

<div class="pcoded-inner-content">


<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-credit-card bg-c-blue"></i>
<div class="d-inline">
<h5>List of Bazar Subscriptions</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{route('admin')}}"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="">User Bazar Subscriptions</a>
</li>

</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">


<div class="card">
<div class="card-header">
<!-- <h5>Users</h5> -->
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Ref</th>
                    <th>Barzar</th>
                    <th>Package</th>
                    <th>Amount</th>
                    <th>Cars Listed</th>
                    <th>Allowed No. Cars</th>
                    <th>Subscription Date</th>
                    <th>Expiry</th>
                    <th>Status</th>
                    
                    <th></th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $users)
                    <tr>
                    @php
                    $hps = App\Models\Barzars::where('id',$users->bazaar_id)->pluck('Barzar_name');
                    $packname = App\Models\Bazaar_package::where('id',$users->package)->pluck('name');
                    $packcars = App\Models\Bazaar_package::where('id',$users->package)->pluck('number_of_cars');
                    $carslisted = App\Models\Car_Sales::where('subscription_id',$users->id)->count();
                                        
                    @endphp
                        <th scope="row">{{$users->id}}</th>
                        <td>{{$users->ref_number}}</td>
                        <td>@foreach($hps as $hps){{ $hps}}@endforeach</td>
                        <td>@foreach($packname as $packname){{ $packname}}@endforeach</td>
                        <td>KES. {{$users->amount}}</td>
                        <td>{{$carslisted}} Cars</td>
                        <td>@foreach($packcars as $packcars){{ $packcars}}@endforeach Cars</td>
                        <td>{{$users->glory_date}}</td>
                        <td>{{$users->expiry_date}}</td>
                        <td>{{$users->status}}</td>
                      
                                      
                        <td><a class="btn btn-primary btn-sm" href="{{route('editbazarsubs',$users->id)}}">Edit</a></td>
                        <td><a href="{{route('delsbazasubs',$users->id)}}" class="btn btn-danger btn-sm" href="">Delete</a></td>
                    </tr>  
                    @endforeach 
            </table>
        </div><center class="mb-4 mt-5">{{$data->links()}}</center>  
                                            <style>
                                                .w-5{
                                                display: none;
                                                }
                                            </style>
    </div>
    </div>


    </div>

    </div>
    </div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>






@endsection