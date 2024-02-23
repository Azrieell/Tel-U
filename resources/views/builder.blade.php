@extends('layouts.app')

<script>

</script>

@section('css')
<style>

</style>

@endsection

@section('appbar')
    <nav class="navbar navbar bg-primary">
        <a class="navbar-brand h3 text-white mt-2" href="#">Resume Builder</a>
    </nav>


@endsection

@section('content')

<table>
    <tr>
        <td style="height: 30px;">
            <div class="icon icon-shape  rounded-circle shadow bg-danger text-center">
                <i class="bi bi-person-lines-fill" style="font-size: 20px;"></i>
            </div>
        </td>
        <td rowspan="7">
            <div class="card rounded shadow mt-0" style="margin-left: 5%;">
                <div class="card-body">
                    <h4 style="margin-left: 7%"><b>Fill In Your Personal </b></h4>
                    <h4 style="margin-left: 7%"><b>Information</b></h4>
                    <br>
                    <h5 style="margin-left: 7%;">Name</h5>
                    <div class="row py-1 mt-1">
                        <div class="col-9" style="margin-left: 7%; width: 95%;">
                            <input type="text" class="form-control">
                        </div>
                        <br>
                        <h5 style="margin-left: 7%;">Phone Number(Mobile)</h5>
                        <div class="row py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">Phone Number</h5>
                        <div class="row text-center py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">Email Adress</h5>
                        <div class="row text-center py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">LinkedIn Profile URL</h5>
                        <div class="row text-center py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">Portfolio/Website URL (Optional)</h5>
                        <div class="row text-center py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">Address (Optional)</h5>
                        <div class="row text-center py-1 mt-1">
                            <div class="col-9" style="margin-left: 7%; width: 120%;">
                                <input type="text" class="form-control">
                            </div>
                            <br>
                        </div>
                        <h5 style="margin-left: 7%;">Short description about yourself</h5>
                        <div class="mb-5">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                style="margin-left: 7%; width: 95%;"></textarea>
                            <br>
                            <center>
                                <button type="button" class="btn btn-light"
                                    style="color: red; width: 45%;">Cancel</button>
                                &nbsp;
                                <button type="button" class="btn btn-danger" style="width: 45%; ">Save &
                                    Continue</button>
                            </center>
                            <button type="button" class="btn btn-danger" style="width: 100%; ">Download as PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <br>
    <tr>
        <td style="height: 10px;">
            <br>
            <a href="/resume-builder-work">
                <div class="icon icon-shape  rounded-circle shadow text-center border" style="background-color: white;">
                    <i class="bi bi-bag-fill" style="font-size: 20px; color: black;"></i>
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
            <div class="icon icon-shape  rounded-circle shadow text-center" style="width: 100%; background-color: white;">
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
