@extends('admin.layouts.default')


@section('title', 'Teachers')

@section('page-heading', 'Teachers')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Teachers Table</h6>
        <a href={{route('create.teacher.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Teacher UID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Basic Salary</th>
                        <th>Joining Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Teacher UID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Basic Salary</th>
                        <th>Joining Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->teacher_uid }}</td>
                        <td>{{ $data->first_name.' '.$data->last_name }}</td>
                        <td>{{ $data->mobile }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->basic_salary }}</td>
                        <td>{{ $data->joining_date }}</td>
                        <td>
                            @if($data->status)
                                <span class="badge bg-primary text-white">Active</span>
                            @else
                                <span class="badge bg-danger text-white">Unactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
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