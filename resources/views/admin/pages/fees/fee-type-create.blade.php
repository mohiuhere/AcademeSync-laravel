@extends('admin.layouts.default')


@section('title', 'Fee Type Create')

@section('page-heading', 'Fee Type Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Fee Type Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputFeeName" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Fee Name" aria-label="Fee Name">
                </div>
                <div class="col">
                    <label for="inputFeeCode" class="form-label">Code</label>
                    <input type="text" class="form-control" placeholder="Fee Code" aria-label="Fee Code">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputFeeName" class="form-label">Description</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description" cols="50" rows="4"></textarea>
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