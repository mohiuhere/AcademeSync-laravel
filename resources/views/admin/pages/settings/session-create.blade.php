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
        @if ($errors->any())
            <div class="alert alert-primary">
                <ul class="text-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('store.session') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputSessionName" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter Session Name" aria-label="Session Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="true" selected>Active</option>
                        <option value="false">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputSessionStart" class="form-label">Start date</label>
                    <input name="start_date" type="date" class="form-control" placeholder="Enter Start date" aria-label="Start date">
                </div>
                <div class="col">
                    <label for="inputSessionEnd" class="form-label">End date</label>
                    <input name="end_date" type="date" class="form-control" placeholder="Enter End date" aria-label="End date">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop