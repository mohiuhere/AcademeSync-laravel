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
        @if ($errors->any())
            <div class="alert alert-primary">
                <ul class="text-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('store.subject') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputSubjectName" class="form-label">Name</label>
                    <input name="subject_name" type="text" class="form-control" placeholder="Subject Name" aria-label="Subject Name">
                </div>
                <div class="col">
                    <label for="inputSubjectCode" class="form-label">Code</label>
                    <input name="subject_code" type="text" class="form-control" placeholder="Subject Code" aria-label="Subject Code">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="inputStatus" class="form-label">Type</label>
                    <select name="subject_type" id="inputStatus" class="form-control">
                        <option value="theory">Theory</option>
                        <option value="practical">Practical </option>
                    </select>
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