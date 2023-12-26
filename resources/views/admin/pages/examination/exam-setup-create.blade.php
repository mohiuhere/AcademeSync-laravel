@extends('admin.layouts.default')


@section('title', 'Exam Setup Create')

@section('page-heading', 'Exam Setup Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Exam Setup Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row mt-3">
                <div class="col">
                    <label for="inputStatus" class="form-label">Exam Type</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Select</option>
                        <option>First</option>
                        <option>Final</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Mark Distribution</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Select</option>
                        <option>Creative Questions</option>
                        <option>Creative Questionsv</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputStatus" class="form-label">Class</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Select</option>
                        <option>ONE</option>
                        <option>TWO</option>
                    </select>
                </div>
                <div class="col">
                    <h6 class="mt-1">Select Sections</h6>
                    <label style="font-size: 20px"><input style="height: 20px;width: 20px;" type="checkbox" value="1" name="sections[]"> A </label>        
                    <label style="font-size: 20px"><input style="height: 20px;width: 20px;" type="checkbox" value="2" name="sections[]"> B </label>       
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
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