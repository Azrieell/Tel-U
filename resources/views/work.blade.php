@extends('layouts.app')

@section('appbar')
{{-- Header --}}
<nav class="navbar navbar bg-primary">
    <a class="navbar-brand h3 text-white mt-2" href="#">Resume Builder</a>
</nav>

@endsection

@section('content')
<table>
    <tr>
        <td style="height: 30px;">
            <div class="icon icon-shape  rounded-circle shadow border text-center" style="background-color: red;">
                <i class="bi bi-person-lines-fill" style="font-size: 15px;"></i>
            </div>
        </td>
        <td rowspan="5">
            <div class="card rounded shadow" style="margin-left: 10%;">
                <div class="card-body">
                    <h3><b>Work Experiences</b></h3>
                    <br>
                    <h4 style="color: gray">Start with your most recent (newest) experiences.</h4>
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
            <a href="/resume-builder-work">
                <div class="icon icon-shape  rounded-circle shadow text-center border" style="background-color: red;">
                    <i class="bi bi-bag-fill" style="font-size: 15px; color: white;"></i>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <a href="/resume-builder-education">
                <div class="icon icon-shape  rounded-circle shadow text-center border" style="background-color: white;">
                    <i class="bi bi-person-lines-fill" style="font-size: 20px; color: black;"></i>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <a href="/resume-builder-organisational">
                <div class="icon icon-shape  rounded-circle shadow text-center" style="background-color: white;">
                    <i class="bi bi-person-rolodex" style="font-size: 20px; color: black;"></i>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <a href="/resume-builder-education">
                <div class="icon icon-shape  rounded-circle shadow text-center" style="background-color: white;">
                    <i class="bi bi-bag-plus" style="font-size: 20px; color: black;"></i>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td style="height: 30px;">
            <br>
            <a href="/resume-builder-skil">
                <div class="icon icon-shape  rounded-circle shadow text-center"
                    style="width: 100%; background-color: white;">
                    <i class="bi bi-person-lines-fill" style="font-size: 20px; color: black;"></i>
                </div>
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="/resume-builder-grafik">
                <div class="icon icon-shape  bg-white text-center border" style="background-color: white;">
                    <i class="bi bi-person-lines-fill" style="font-size: 20px;"></i>
                </div>
            </a>
        </td>
    </tr>
</table>
@endsection
