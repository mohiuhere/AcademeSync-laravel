@extends('admin.layouts.default')


@section('title', 'Genders')

@section('page-heading', 'Genders')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Genders Table</h6>
        <a href={{route('create.gender.index')}}><button class="btn btn-primary">Create</button></a>
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
                    <tr>
                        <td>Male</td>
                        <td>Active</td>
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
                    <tr>
                        <td>Female</td>
                        <td>Active</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop