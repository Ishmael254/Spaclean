@extends('layouts.home')
@section('content')

<div class="pcoded-content">

@foreach($data as $data)
    <div class="container">
        <div class="main-body">
        
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                
                @php
                $hps = App\Models\User::where('id',$data->user_id)->pluck('name');
                $hps2 = App\Models\User::where('id',$data->user_id)->pluck('name');
                $hps3 = App\Models\User::where('id',$data->user_id)->pluck('name');
                $hps4 = App\Models\User::where('id',$data->user_id)->pluck('name');
                $hpsemail = App\Models\User::where('id',$data->user_id)->pluck('email');
                $hpsphone = App\Models\User::where('id',$data->user_id)->pluck('phone');
                    
                @endphp
                <li class="breadcrumb-item active" aria-current="page">
                    @foreach($hps as $hps)
                        {{ $hps}} 
                      @endforeach
                    </li>
                </ol>
            </nav>
            <center> @include('inc.messages')</center>

            <!-- /Breadcrumb -->
        
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                        <h4> @foreach($hps3 as $hps)
                        {{ $hps}} 
                      @endforeach</h4>
                      @php
                        $unqid = App\Models\Network_profiles::where('user_id',$data->user_id)->pluck('unique_id');                        
                        
                    @endphp
                    @foreach($unqid as $unqid)
                        
                      @endforeach
                        <p class="text-secondary mb-1">{{$data->Profession}}</p>
                        <p class="text-muted font-size-sm">{{$data->Location}}</p>
                        <a href="{{route('connect',$data->user_id)}}" class="btn btn-primary btn-sm">Connect</a>
                        <a href="{{route('chat',$unqid)}}" class="btn btn-success btn-sm ml-3">Message</a>
                        </div>
                    </div>
                    </div>
                </div>
               
                </div>
                <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Full Name :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        @foreach($hps2 as $hps)
                        {{ $hps}} 
                      @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        @foreach($hpsemail as $hpsemail)
                        {{ $hpsemail}} 
                      @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        @foreach($hpsphone as $hps)
                        {{ $hps}} 
                      @endforeach
                        </div>
                    </div>
                    <hr>
                   
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{$data->Location}}
                        </div>
                    </div>
                    <hr>
                    
                    </div>
                </div>

                <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">About   @foreach($hps4 as $hps4)
                        {{ $hps4}} 
                      @endforeach </h6>
                        <small>{{$data->About}}</small>
                        
                        
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                    
                    </div>
                </div>



                </div>
            </div>

            </div>
            </div>
   @endforeach     
        </div>


<style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>




@endsection