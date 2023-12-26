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
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputGender" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Gender Name" aria-label="Gender Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>


@stop