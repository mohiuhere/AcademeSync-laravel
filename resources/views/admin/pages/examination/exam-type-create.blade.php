@extends('admin.layouts.default')


@section('title', 'Exam Type Create')

@section('page-heading', 'Exam Type Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Exam Type Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputExamName" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Exam Name" aria-label="Exam Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>


@stop