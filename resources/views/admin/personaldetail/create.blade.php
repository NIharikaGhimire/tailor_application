@extends('admin.layouts.master')

@section('content')

<div class="row mb-2">
    <div class="col-sm-6">
        {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
        <a href="{{ url('admin') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                Back</button></a>
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

<form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.personaldetail.store') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Name</label><span style="color:red; font-size:large"> *</span>
            <input style="width:auto;" type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                placeholder="Add Name">
        </div>
        <div class="form-group">
            <label for="title">Address</label><span style="color:red; font-size:large"> *</span>
            <input style="width:auto;" type="text" name="address" class="form-control" id="address"
                value="{{ old('address') }}" placeholder="Add Address">
        </div>
        <div class="form-group">
            <label for="title">Phone</label><span style="color:red; font-size:large"> *</span>
            <input style="width:auto;" type="text" name="phone" class="form-control" id="phone"
                value="{{ old('phone') }}" placeholder="Add Phone">
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
