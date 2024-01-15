@extends('admin.layouts.default')


@section('title', 'Exam Setup')

@section('page-heading', 'Exam Setup')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Exam Setup Table</h6>
        <a href={{route('create.exam.setup.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Exam Title</th>
                        <th>Mark Distribution</th>
                        <th>Class</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Exam Title</th>
                        <th>Mark Distribution</th>
                        <th>Class</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($exam_setups as $exam_setup)
                        <tr>
                            <td>{{ $exam_setup->exam_type_name }}</td>
                            <td>{{ $exam_setup->mark_distribution_name }}</td>
                            <td>{{ $exam_setup->class_name }}</td>
                            <td>
                                @if($exam_setup->status)
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
                                        <a class="dropdown-item" href="{{ url('exam-setup/edit/'.$exam_setup->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ url('exam-setup/delete/'.$exam_setup->id) }}">Delete</a>
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