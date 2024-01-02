@extends('admin.layouts.default')


@section('title', 'Subject Edit')

@section('page-heading', 'Subject Edit')

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
        <form action="{{ route('edit.subject') }}" method="post">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col">
                    <label for="inputSubjectName" class="form-label">Name</label>
                    <input value="{{ $data->subject_name }}" name="subject_name" type="text" class="form-control" placeholder="Subject Name" aria-label="Subject Name">
                </div>
                <div class="col">
                    <label for="inputSubjectCode" class="form-label">Code</label>
                    <input value="{{ $data->subject_code }}" name="subject_code" type="text" class="form-control" placeholder="Subject Code" aria-label="Subject Code">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="inputStatus" class="form-label">Type</label>
                    <select name="subject_type" id="inputStatus" class="form-control">
                        <option value="theory" {{($data->subject_type == 'theory') ? 'selected' : ''}}>Theory</option>
                        <option value="practical" {{($data->subject_type == 'practical') ? 'selected' : ''}}>Practical </option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" {{($data->status == 1) ? 'selected' : ''}}>Active</option>
                        <option value="0" {{($data->status == 0) ? 'selected' : ''}}>Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Update</button>
        </form>
    </div>
</div>


@stop