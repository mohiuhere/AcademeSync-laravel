@extends('admin.layouts.default')


@section('title', 'Students')

@section('page-heading', 'Students')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Students Table</h6>
        <a href={{route('create.student.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Class (Section)</th>
                        <th>Student Roll</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Admission Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>

                        <th>Name</th>
                        <th>Class (Section)</th>
                        <th>Student Roll</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Admission Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->first_name. " ".$student->last_name }}</td>
                        <td>{{ $student->class_name." (".$student->section_name.") " }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->admission_date }}</td>
                        <td>
                            @if($student->status)
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
                                    <a class="dropdown-item" href="{{ url('student/edit/'.$student->id) }}">Edit</a>
                                    <a class="dropdown-item" href="{{ url('student/delete/'.$student->id) }}">Delete</a>
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