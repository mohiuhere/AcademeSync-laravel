@extends('admin.layouts.default')


@section('title', 'General Settings')

@section('page-heading', 'General Settings')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">General Settings Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputSchoolName" class="form-label">School Name</label>
                    <input type="text" class="form-control" placeholder="Enter School Name" aria-label="School Name">
                </div>
                <div class="col">
                    <label for="inputSchoolPhone" class="form-label">School Phone</label>
                    <input type="number" class="form-control" placeholder="Enter School Phone" aria-label="School Phone">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputSchoolName" class="form-label">School Email</label>
                    <input type="email" class="form-control" placeholder="Enter School Email" aria-label="School Email">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Logo</label>
                    <input type="file" class="form-control" >
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label for="inputAddress " class="form-label">Address</label>
                    <textarea type="text" class="form-control" placeholder="Enter Address" cols="50" rows="4"></textarea>
                </div>
                <div class="col">
                    <label for="inputSchoolAbout" class="form-label">School About</label>
                    <textarea type="text" class="form-control" placeholder="Enter School About" cols="50" rows="4"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>


@stop