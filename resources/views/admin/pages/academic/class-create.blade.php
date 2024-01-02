@extends('admin.layouts.default')


@section('title', 'Class Create')

@section('page-heading', 'Class Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    @if ($errors->any())
            <div class="alert alert-primary">
                <ul class="text-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Class Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('store.classes') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputClassName" class="form-label">Name</label>
                    <input name="class_name" type="text" class="form-control" placeholder="Class Name" aria-label="Class Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop