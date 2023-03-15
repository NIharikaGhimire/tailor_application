@extends('admin.layouts.master')

@section('content')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">{{ $page_title }}</h1>
        <a href="{{ url('admin/measurementdetail/create') }}"><button class="btn btn-primary btn-sm"><i
                    class="fa fa-plus"></i>Add measurement Details </button></a>
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
            <th>Title</th>
            <th>Personal Detail</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($measurementdetails as $measurementdetail)
        <tr data-widget="expandable-table" aria-expanded="false">
            <td width="5%">{{ $loop->iteration }}</td>

            <td>{{ $measurementdetail->title ?? '' }}</td>
            {{-- <td>{{ $measurementdetail->name ?? '' }}</td> --}}
            <td>@foreach ($measurementdetail->getPersonalDetail as $personaldetails)
                <ul style="display: inline-block">{{ $personaldetails->name }}</ul>
                @endforeach
            </td>

            <td>
                <a href="edit/{{ $measurementdetail->id }}">
                    <div style="display: flex; flex-direction:row;">
                        <button type="button" class="btn btn-block btn-warning btn-sm"><i class="fas fa-edit"></i> Edit
                        </button>
                </a>
                <a href="{{ url('admin/measurementdetail/destroy/'.$measurementdetail->id) }}">
                    <button type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;" onclick="replaceLinkFunction">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
