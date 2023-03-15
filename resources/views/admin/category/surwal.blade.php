
@extends('admin.layouts.master')

@section('content')

    <div class="row mb-2">
        <div class="col-sm-6">
            {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
            <a href="{{ route('admin.measurementdetail.index') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>Back</button></a>
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
        <h4>Surwal Measurement</h4>
        <div class="form-outline">

            <div class="form-outline">
                <label class="form-label" for="typeText">Hip</label>
                <input type="text" id="typeText" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="typeText">Waist</label>
                <input type="text" id="typeText" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="typeText">Thai</label>
                <input type="text" id="typeText" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="typeText">Knee</label>
                <input type="text" id="typeText" class="form-control" />
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>

@stop

