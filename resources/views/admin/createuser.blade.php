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
<h5>Add User</h5>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{route('admin')}}"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="">Add Users</a>
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

<div class="card-block">

<form action="{{ route('adduserpost') }}" method="post">
    @csrf


<div class="form-group row">
<label class="col-sm-2 col-form-label">User Name</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control form-control-round" placeholder="User Name">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">User Email </label>
<div class="col-sm-10">
<input type="text" name="email" class="form-control form-control-round" placeholder="User Email">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">User Phone </label>
<div class="col-sm-10">
<input type="text" name="phone" class="form-control form-control-round" placeholder="Phone Number">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Password </label>
<div class="col-sm-10">
<input type="password" name="password" class="form-control form-control-round" placeholder="Passwords">
</div>
</div>
<center><button class="btn btn-success" type="submit">Submit and Create</button></center>

</div>
</form>

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