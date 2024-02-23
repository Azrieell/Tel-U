@extends('layouts.app')

@section('css')
<style>
    .height {

        height: 10vh;
    }

    .form {

        position: relative;
    }

    .form .fa-search {

        position: absolute;
        top: 20px;
        left: 20px;
        color: #9ca3af;

    }

    .form span {

        position: absolute;
        right: 17px;
        top: 13px;
        padding: 2px;
        border-left: 1px solid #d1d5db;

    }

    .left-pan {
        padding-left: 7px;
    }

    .left-pan i {

        padding-left: 10px;
    }

    .form-input {

        height: 55px;
        text-indent: 33px;
        border-radius: 10px;
    }

    .form-input:focus {

        box-shadow: none;
        border: none;
    }

</style>
@endsection

@section('content')
<div class="row height d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="form">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control form-input" placeholder="What are you looking for?">
            <span class="left-pan"><i class="fa fa-microphone"></i></span>
        </div>
    </div>
</div>
</div>

<div class="container">
  <div class="card container" style="border: 1px solid grey;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <img src="{{asset('images/image 2.png')}}" alt="" style="width: 150px;">
        </div>
        <div class="col">
          <i class="bi bi-bookmark float-end" style="font-size: 250%;"></i>
        </div>
      </div>
        <br>
        <div>
            <h2 style="margin-top: 5%;"><b>Programmer</b></h2>
            <h4>Grab Holdings Inc.</h4>
            <h5>
                <p>3 Agustus 23 - 8 Agustus 23 </p>
            </h5>
        </div>
    </div>
</div>
<br>
<div class="card container" style="border: 1px solid grey;">
  <div class="card-body">
    <div class="row">
      <div class="col">
        <img src="{{asset('images/image 2.png')}}" alt="" style="width: 150px;">
      </div>
      <div class="col">
        <i class="bi bi-bookmark float-end" style="font-size: 250%;"></i>
      </div>
    </div>
      <br>
      <div>
          <h2 style="margin-top: 5%;"><b>Programmer</b></h2>
          <h4>Grab Holdings Inc.</h4>
          <h5>
              <p>3 Agustus 23 - 8 Agustus 23 </p>
          </h5>
      </div>
  </div>
</div> 
</div>
@endsection
