@extends('admin.layouts.default')


@section('title', 'Blood Groups')

@section('page-heading', 'Blood Groups')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Blood Groups Table</h6>
        <a href={{route('create.blood-group.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->blood_group_name }}</td>
                            <td>
                                @if($data->status)
                                    <span class="badge bg-primary text-white">Active</span>
                                @else
                                    <span class="badge bg-danger text-white">Unactive</span>
                                @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-list"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('blood-group/edit/'.$data->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ url('blood-group/delete/'.$data->id) }}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop