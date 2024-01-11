@extends('admin.layouts.default')


@section('title', 'Marks Grade')

@section('page-heading', 'Marks Grade')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Marks Grade Table</h6>
        <a href={{route('create.mark.grade.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Point</th>
                        <th>Percent From</th>
                        <th>Percent Upto</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Point</th>
                        <th>Percent From</th>
                        <th>Percent Upto</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($mark_grades as $mark_grade)
                        <tr>
                            <td>{{ $mark_grade->mark_grade_name }}</td>
                            <td>{{ $mark_grade->point }}</td>
                            <td>{{ $mark_grade->percent_from .'%'}}</td>
                            <td>{{ $mark_grade->percent_upto .'%'}}</td>
                            <td>{{ $mark_grade->remark }}</td>
                            <td>
                                @if($mark_grade->status)
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
                                        <a class="dropdown-item" href="{{ url('mark-grade/edit/'.$mark_grade->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ url('mark-grade/delete/'.$mark_grade->id) }}">Delete</a>
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