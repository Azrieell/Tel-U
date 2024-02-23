@extends('layouts.app')

@section('appbar')
{{-- Header --}}
<nav class="navbar navbar bg-primary">
    <a class="navbar-brand h3 text-white mt-2" href="#">Resume Builder</a>
</nav>

<style>

</style>
{{-- Akhir --}}
@endsection

@section('content')
<div class="card rounded shadow">
    <div class="card-body">
      <embed src="{{ $letter->image }}" type="application/pdf" width="100%" height="600px">
</iframe>
    </div>
</div>
@endsection
