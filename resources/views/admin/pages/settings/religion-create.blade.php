@extends('admin.layouts.default')


@section('title', 'Religions Create')

@section('page-heading', 'Religions Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Religions Input</h6>
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
        <form action="{{ route('store.religion') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputReligion" class="form-label">Name</label>
                    <input type="text" name="religion_name" class="form-control" placeholder="Enter Religion Name" aria-label="Religion Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="religion_status" id="inputStatus" class="form-control">
                        <option value="true" selected>Active</option>
                        <option value="false">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop