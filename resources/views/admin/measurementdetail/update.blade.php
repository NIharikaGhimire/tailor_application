@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_title }}</h1>
                    {{-- <a href="{{ url('admin/posts/add') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add Team Member</button></a> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form id="quickForm" method="POST" action="{{ route('admin.measurementdetail.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $measurementdetail->id }}">
                {{-- <input type="hidden" name="id" value="{{ $about->id }}"> --}}
                <div class="form-group">
                    <label for="name">Title</label><span style="color:red; font-size:large"> *</span>
                    <input style="width:auto;" type="text" name="title" class="form-control" id="title"
                        placeholder="Name" value="{{ $measurementdetail->title }}">
                </div>

                {{-- <div class="form-group" style="margin: auto;">
                    <label>Posts</label>
                    @foreach ($post as $posts)
                    <div class="form-check checkbox2">
                        <input class="form-check-input" name="post[]" value="{{ $posts->id }}" type="checkbox" @if ($posts->getCategories->contains($category->id))
                        checked
                        @endif>
                        <label class="form-check-label">{{ $posts->title ?? '' }}</label>
                    </div>
                    @endforeach
                </div> --}}

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>










@stop
