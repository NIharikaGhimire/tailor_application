@extends('admin.layouts.master')

@section('content')

<div class="row mb-2">
    <div class="col-sm-6">
        {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
        <a href="{{ url('admin/measurementdetail/index') }}"><button class="btn btn-primary btn-sm"><i
                    class="fa fa-arrow-left"></i>Back</button></a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.measurementdetail.store') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
            <input style="width:auto;" type="text" name="title" class="form-control" id="title"
                value="{{ old('title') }}" placeholder="Add title">
        </div>


        {{-- For coat --}}
        {{-- <a class="link" href="{{ route('admin.category.coat') }}">
            <div class="cat">Coat</div>
        </a> --}}

        {{-- For longcoat --}}
        {{-- <a class="link" href="{{ route('admin.category.longcoat') }}">
            <div class="cat">Long Coat</div>
        </a> --}}

        {{-- For daura --}}
        {{-- <a class="link" href="{{ route('admin.category.daura') }}">
            <div class="cat">Daura</div>
        </a> --}}

        {{-- FOr jwari coat --}}
        {{-- <a class="link" href="{{ route('admin.category.jwaricoat') }}">
            <div class="cat">Jwari Coat</div>
        </a> --}}

        {{-- For Pant --}}
        {{-- <a class="link" href="{{ route('admin.category.pant') }}">
            <div class="cat">Pant</div>
        </a> --}}

        {{-- For Shirt --}}
        {{-- <a class="link" href="{{ route('admin.category.shirt') }}">
            <div class="cat">Shirt</div>
        </a> --}}

        {{-- For Surwal --}}
        {{-- <a class="link" href="{{ route('admin.category.surwal') }}">
            <div class="cat">Surwal</div>
        </a> --}}


        {{-- <div class="form-group">
            <a href="{{ route('admin.category.pant') }}">
                <label for="title">Pant</label>
            </a>
        </div> --}}

           <div class="form-group" style="margin: auto;">
            <label>Name</label>
            @foreach ($personaldetail as $personaldetails)
            <div class="form-check checkbox2">
                <input class="form-check-input" name="personaldetails[]" value="{{ $personaldetails->id }}"
                    type="checkbox">
                <label class="form-check-label">{{ $personaldetails->name ?? '' }}</label>
            </div>
            @endforeach
        </div>

              {{-- <div class="form-group" style="margin: auto;">
            <label>Posts</label>
            @foreach ($posts as $post)
            <div class="form-check checkbox2">
                <input class="form-check-input" name="post[]" value="{{ $post->id }}" type="checkbox">
                <label class="form-check-label">{{ $post->title ?? '' }}</label>
            </div>
            @endforeach
        </div> --}}
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@stop
