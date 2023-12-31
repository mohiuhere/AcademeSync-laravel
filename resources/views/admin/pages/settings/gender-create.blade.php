@extends('admin.layouts.default')


@section('title', 'Genders Create')

@section('page-heading', 'Genders Create')

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
        <form action="{{ route('store.gender') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputGender" class="form-label">Name</label>
                    <input name="gender_name" type="text" class="form-control" placeholder="Enter Gender Name" aria-label="Gender Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="gender_status" id="inputStatus" class="form-control">
                        <option value="true" selected>Active</option>
                        <option value="false" >Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>

@stop