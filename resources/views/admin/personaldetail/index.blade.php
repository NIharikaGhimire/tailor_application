@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">{{ $page_title }}</h1>
        <a href="{{ url('admin/personaldetail/create') }}"><button class="btn btn-primary btn-sm"><i
                    class="fa fa-plus"></i>Add Personal Details</button></a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            {{-- <th>Post</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($personaldetails as $personaldetail)
        <tr data-widget="expandable-table" aria-expanded="false">
            <td width="5%">{{ $loop->iteration }}</td>

            <td>{{ $personaldetail->name ?? '' }}</td>
            <td>{{ $personaldetail->address ?? '' }}</td>
            <td>{{ $personaldetail->phone ?? '' }}</td>
            {{-- <td>@foreach ($personaldetails->getPosts as $personaldetail)
                <ul style="display: inline-block">{{ $personaldetail->title. '|' }}</ul>
                @endforeach
            </td> --}}

            <td>
                <a href="edit/{{ $personaldetail->id }}">
                    <div style="display: flex; flex-direction:row;">
                        <button type="button" class="btn btn-block btn-warning btn-sm"><i class="fas fa-edit"></i> Edit
                        </button>
                </a>

                <a href="{{ url('admin/personaldetail/destroy/'.$personaldetail->id) }}">
                    <button type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;" onclick="replaceLinkFunction">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
