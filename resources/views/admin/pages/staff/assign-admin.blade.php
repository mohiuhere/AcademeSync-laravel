@extends('admin.layouts.default')


@section('title', 'Admin Create')

@section('page-heading', 'Admin Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Teacher Create Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('store.assign-admin') }}" method="post">
            @csrf
            <div class="row">   
                <div class="col">
                    <label for="inputFirstName" class="form-label">First name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="inputLastName" class="form-label">Last name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputMobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" aria-label="Mobile">
                </div>
                <div class="col">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" aria-label="Email">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop