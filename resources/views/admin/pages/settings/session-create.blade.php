@extends('admin.layouts.default')


@section('title', 'Session Create')

@section('page-heading', 'Session Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Session Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputSessionName" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Session Name" aria-label="Session Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputSessionStart" class="form-label">Start date</label>
                    <input type="date" class="form-control" placeholder="Enter Start date" aria-label="Start date">
                </div>
                <div class="col">
                    <label for="inputSessionEnd" class="form-label">End date</label>
                    <input type="date" class="form-control" placeholder="Enter End date" aria-label="End date">
                </div>
            </div>
        </form>
    </div>
</div>


@stop