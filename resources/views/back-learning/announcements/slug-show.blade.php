@extends('layouts.master')

@push('title')
- Announcement
@endpush

@push('styles')
<link rel="stylesheet" href="{{URL::to('vendor/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{URL::to('vendor/assets/vendors/css/vendor.bundle.base.css')}}">
<link rel="stylesheet" href="{{URL::to('vendor/assets/css/style.css')}}">
<link rel="shortcut icon" href="{{ URL::to('vendor/assets/images/logo-atas.png')}}">
@endpush

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-voice"></i>
        </span> Pengumuman
    </h3>
</div>

<div class="form-group">
    <form class="form-inline" method="get" action="{{ url('announcement/search') }}">
        <div class="input-group">
            <input name="slug" type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-sm btn-gradient-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<div class="row">
    @if($announcements == true)
    @foreach($announcements as $announcement)
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card" style="height: 400px;">
            <div class="card-body">
                <h4 class="card-title">{{ $announcement->title }}
                    <img src="{{ asset('announcement/'.$announcement->name . '/' . $announcement->upload_type) }}" alt="NULL" style="margin-top: 20px; border-radius: 5px; width: 200px; height: 200px;">
                </h4>
                <form action="{{ url('announcement/'.$announcement->id )}}">
                    <a href="{{ url('announcement/'.$announcement->id) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    @if(Auth()->user()->role_id == 1)
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    <input type="hidden" name="_method" value="DELETE">
                    @else
                    @endif
                </form>

            </div>
        </div>
    </div>
</div>

@endforeach
@else

<h2>No Announcement found</h2>

@endif
</div>

@push('scripts')
<script src="{{URL::to('vendor/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{URL::to('vendor/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::to('vendor/assets/js/off-canvas.js')}}"></script>
<script src="{{URL::to('vendor/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{URL::to('vendor/assets/js/misc.js')}}"></script>

@endpush
@endsection