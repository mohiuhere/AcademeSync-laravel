@extends('admin.layouts.default')


@section('title', 'General Settings')

@section('page-heading', 'General Settings')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">General Settings Input</h6>
        <img src="{{ $img_url }}" class="img-fluid img-thumbnail" style="width:50px;height:50px;">
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action={{route('store.general.setting')}} enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputSchoolName" class="form-label">School Name</label>
                    <input name="school_name" value="{{$data->school_name}}" type="text" class="form-control" placeholder="Enter School Name" aria-label="School Name">
                </div>
                <div class="col">
                    <label for="inputSchoolPhone" class="form-label">School Phone</label>
                    <input name="school_phone" value="{{$data->school_phone}}" type="text" class="form-control" placeholder="Enter School Phone" aria-label="School Phone">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputSchoolName" class="form-label">School Email</label>
                    <input name="school_email" value="{{$data->school_email}}" type="email" class="form-control" placeholder="Enter School Email" aria-label="School Email">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Logo</label>
                    <input name="school_logo" value="{{$data->school_logo_url}}" type="file" class="form-control" >
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea name="school_address" type="text" class="form-control" placeholder="Enter Address" cols="50" rows="4">{{$data->school_address}}</textarea>
                </div>
                <div class="col">
                    <label for="inputSchoolAbout" class="form-label">School About</label>
                    <textarea name="school_about" type="text" class="form-control" placeholder="Enter School About" cols="50" rows="4">{{$data->school_about}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop