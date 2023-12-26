@extends('admin.layouts.default')


@section('title', 'Mark Distribution')

@section('page-heading', 'Mark Distribution')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Mark Distribution Table</h6>
        <a href={{route('create.mark.distribution.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mark Distribution</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Mark Distribution</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Creative Questionsv</td>
                        <td>
                            <!-- Button trigger modal: data-target="#staticBackdrop-{id}"-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mark-distribution-1">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
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
                        <td>Creative Questionsv</td>
                        <td>
                            <!-- Button trigger modal: data-target="#staticBackdrop-{id}"-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mark-distribution-2">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
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

<!-- Modal: id="teacher-sunject-{id}" -->
<div class="modal fade" id="mark-distribution-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Distribution</th>
                <th scope="col">Mark</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Class Attendance</td>
                <td>10</td>
              </tr>
              <tr>
                <td>Assignment & Presentation</td>
                <td>20</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<!-- Modal: id="teacher-sunject-{id}" -->
<div class="modal fade" id="mark-distribution-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Distribution</th>
                <th scope="col">Mark</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Class Attendance</td>
                <td>10</td>
              </tr>
              <tr>
                <td>Assignment & Presentation</td>
                <td>20</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>


@stop