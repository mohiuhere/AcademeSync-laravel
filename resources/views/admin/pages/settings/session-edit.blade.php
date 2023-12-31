@extends('admin.layouts.default')


@section('title', 'Blood Groups Edit')

@section('page-heading', 'Blood Groups Edit')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Genders Input</h6>
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
        <form action="{{ route('edit.session') }}" method="post">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col">
                    <label for="inputGender" class="form-label">Name</label>
                    <input value="{{ $data->session_list_name }}" name="name" type="text" class="form-control" placeholder="Enter Gender Name" aria-label="Gender Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="gender_status" id="inputStatus" class="form-control">
                        <option value="true" {{($data->status == 1) ? 'selected' : ''}}>Active</option>
                        <option value="false" {{($data->status == 0) ? 'selected' : ''}}>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputSessionStart" class="form-label">Start date</label>
                    <input name="start_date" value="{{ $data->start_date }}" type="date" class="form-control" placeholder="Enter Start date" aria-label="Start date">
                </div>
                <div class="col">
                    <label for="inputSessionEnd" class="form-label">End date</label>
                    <input name="end_date" value="{{ $data->end_date }}" type="date" class="form-control" placeholder="Enter End date" aria-label="End date">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Update</button>
        </form>
    </div>
</div>

@stop