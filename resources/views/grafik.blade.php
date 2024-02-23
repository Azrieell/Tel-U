@extends('layouts.app')

@section('appbar')
{{-- Header --}}
<nav class="navbar navbar bg-primary">
    <a class="navbar-brand h3 text-white mt-2" href="#">Resume Builder</a>
</nav>

@endsection

@section('css')
    
@endsection

@section('content')
<table>
    <tr>
        <td style="height: 30px;">
            <div class="icon icon-shape rounded-circle shadow bg-danger text-center">
                <i class="bi bi-person-lines-fill"></i>
            </div>
        </td>
        <td rowspan="5">
            <div class="card rounded shadow" style="margin-left: 10%;">
                <div class="card-body">
                    <h3><b>Review your Resume</b></h3>
                    <br>
                    
                    <h2>Highcharts Example</h2>
                    <div class="app-wrapper" ng-controller="ctrl">
                      <div class="chartWrap">
                        <div id="onFeedChart"></div>
                      </div>
                      <div class="chartWrap">
                        <div id="photoUploadChart"></div>
                      </div>
                      <div class="chartWrap">
                        <div id="vendorChart"></div>
                      </div>
                    </div>

                    <div class="col-9" style="margin-left: 5%; width: 90%; margin-top: 5%;">
                        <input type="file" class="form-control">
                    </div>
                    <br>
                    <center>
                        <button type="button" class="btn btn-light" style="color: red; width: 45%;">Cancel</button>
                        &nbsp;
                        <button type="button" class="btn btn-danger" style="width: 45%; ">Save & Continue</button>
                    </center>
                    <br>
                    <button type="button" class="btn btn-danger" style="width: 100%; ">Download as PDF</button>
                </div>
            </div>
        </td>
    </tr>
    <br>
    <tr>
        <td style="height: 10px;">
            <br>
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-bag-fill"></i>
            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-person-lines-fill"></i>
            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-person-rolodex"></i>
            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-bag-plus"></i>
            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-person-lines-fill"></i>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="icon icon-shape  bg-white text-center">
                <i class="bi bi-person-lines-fill"></i>
            </div>
        </td>
    </tr>
</table>

<script>
  //doughnut
  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });

</script>
    @endsection
