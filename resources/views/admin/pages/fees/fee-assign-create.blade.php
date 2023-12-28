@extends('admin.layouts.default')


@section('title', 'Fee Assign Create')

@section('page-heading', 'Fee Assign Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Fees Assign Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputStatus" class="form-label">Fees type</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Monthly fees</option>
                        <option>Exam Fees</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Due date</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputAmount" class="form-label">Amount</label>
                    <input type="number" class="form-control" placeholder="Exam Amount" aria-label="Exam Amount">
                </div>
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <select id="inputClass" class="form-control">
                        <option selected>ONE</option>
                        <option>TWO</option>
                    </select>
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