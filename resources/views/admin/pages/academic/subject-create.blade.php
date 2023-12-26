@extends('admin.layouts.default')


@section('title', 'Subject Create')

@section('page-heading', 'Subject Create')

@section('bodys')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Subject Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputSubjectName" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Subject Name" aria-label="Subject Name">
                </div>
                <div class="col">
                    <label for="inputSubjectCode" class="form-label">Code</label>
                    <input type="text" class="form-control" placeholder="Subject Code" aria-label="Subject Code">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="inputStatus" class="form-label">Type</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Theory</option>
                        <option>Practical </option>
                    </select>
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