@extends('admin.layouts.default')


@section('title', 'Class Create')

@section('bodys')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Class Create</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header  row justify-content-md-center m-0">
            <h6 class="m-0 font-weight-bold text-primary col align-self-center">Class Input</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                      <label for="inputState" class="form-label">First Name</label>
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <label for="inputState" class="form-label">Last Name</label>
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@stop