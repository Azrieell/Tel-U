@extends('layouts.app')

@section('css')
<style>
    .timeline-with-icons {
  border-left: 5px solid hsl(0, 94%, 52%);
  position: relative;
  list-style: none;
}

.timeline-with-icons .timeline-item {
  position: relative;
}

.timeline-with-icons .timeline-item:after {
  position: absolute;
  display: block;
  top: 0;
}

.timeline-with-icons .timeline-icon {
  position: absolute;
  left: -49px;
  background-color: hsl(0, 0%, 98%);
  color: #ffffff(217, 88.8%, 35.1%);
  border-radius: 50%;
  height: 45px;
  width: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
    
@endsection
@section('content')
{{-- Head --}}
<div class="card mt-" style="width: 100%;">
    <div class="card-body">
        <div class="col-lg-6 mt-lg-0 ps-lg-0 ps-0">
            <div class="info-horizontal">
                <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center">
                    <a href="javascript:;" class="avatar avatar-md rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('assets/member/assets/img/team-4.jpg') }}">
                    </a>
                </div>
                <div style="margin-left: 60px;">
                    <div class="description ps-3">
                        <div class="mb-0"><b style="font-size: 18px;">Azriel R Siddiq</b> <br>6706213100 <br>D3IF-45-01 <button type="button"
                                class="btn" style="margin-left: 75px; background: #FBE1E1; color: #CF171D;">Poin TAK:
                                89/45</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
{{-- Akhir Head --}}

{{-- Button --}}
<center>
    <div>
        <button type="button" class="btn btn-danger"
            style="border-radius: 50px; width: 80px; height: 40px;">Waktu</button>
        <button type="button" class="btn"
            style="border-radius: 50px; background: white; border: 1px solid silver; width: 80px; height: 40px;">Kategori</button>
        <button type="button" class="btn"
            style="border-radius: 50px; background: white; border: 1px solid silver; width: 80px; height: 40px;">Pilar</button>
        <button type="button" class="btn"
            style="border-radius: 50px; background: white; border: 1px solid silver; width: 80px; height: 40px;">Jenis</button>
    </div>
</center>
{{-- Akhir Button --}}

{{-- Foto Buled --}}
<!-- Section: Timeline -->
<div class="container">
    <section class="py-5">
        <ul class="timeline-with-icons" >
            <li class="timeline-item mb-5">
                <span class="timeline-icon bg-white text-black" style="border: 1px solid grey">
                    {{-- <i class="fas fa-rocket text-primary fa-sm fa-fw"></i> --}}
                    2020
                </span>
    
                <h2 class="fw-bold" style="margin-left: 5%; ">Januari</h2>
                <p class="text-muted mb-2 fw-bold" style="margin-left: 80%;">15 poin</p>
                <p class="text-muted mb-2 fw-bold"><h5 style="margin-left: 5%;">Judul Kegiatan</h5></p>
                
                <p class="text-muted" style="margin-left: 5%;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                    necessitatibus adipisci, ad alias, voluptate pariatur officia
                    repellendus repellat inventore fugit perferendis totam dolor
                    voluptas et corrupti distinctio maxime corporis optio?
                </p>
            </li>
    
            <li class="timeline-item mb-5">
    
                <span class="timeline-icon bg-danger text-white" >
                    {{-- <i class="fas fa-hand-holding-usd text-primary fa-sm fa-fw"></i> --}}
                    2021
                </span>
                <h2 class="fw-bold" style="margin-left: 5%;">Februari</h2>
                <p class="text-muted mb-2 fw-bold" style="margin-left: 80%;">15 poin</p>
                <p class="text-muted mb-2 fw-bold"><h5 style="margin-left: 5%;">Judul Kegiatan</h5></p>
                <p class="text-muted" style="margin-left: 5%; ">
                    Quisque ornare dui nibh, sagittis egestas nisi luctus nec. Sed
                    aliquet laoreet sapien, eget pulvinar lectus maximus vel.
                    Phasellus suscipit porta mattis.
                </p>
            </li>
    
            <li class="timeline-item mb-5">
    
                <span class="timeline-icon"  style="border: 1px solid grey">
                    {{-- <i class="fas fa-users text-primary fa-sm fa-fw"></i> --}}
                    2023
                </span>
                <h2 class="fw-bold" style="margin-left: 5%; ">Maret</h2>
                <p class="text-muted mb-2 fw-bold" style="margin-left: 80%;">15 poin</p>
                <p class="text-muted mb-2 fw-bold"><h5 style="margin-left: 5%; ">Judul Kegiatan</h5></p>
                <p class="text-muted" style="margin-left: 5%; ">
                    Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Nulla ullamcorper arcu lacus, maximus
                    facilisis erat pellentesque nec.
                </p>
            </li>
        </ul>
    </section>
</div>

@endsection
