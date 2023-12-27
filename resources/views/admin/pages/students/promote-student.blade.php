@extends('admin.layouts.default')


@section('title', 'Promote students')

@section('page-heading', 'Promote students')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Promote students Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <input type="text" class="form-control" placeholder="Class" aria-label="Class">
                </div>
                <div class="col">
                    <label for="inputSection" class="form-label">Section</label>
                    <input type="text" class="form-control" placeholder="Select Section" aria-label="Section">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <h1>Promote students in next session</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputPromoteSession" class="form-label">Promote session</label>
                    <select id="inputPromoteSession" class="form-control">
                        <option selected>2023</option>
                        <option>2024</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputPromoteClass" class="form-label">Promote class</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>ONE</option>
                        <option>TWO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputPromoteSection" class="form-label">Promote section</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>A</option>
                        <option>B</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>


@stop