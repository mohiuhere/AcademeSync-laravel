@extends('admin.layouts.default')


@section('title', 'Marks Grade Create')

@section('page-heading', 'Marks Grade Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    @if ($errors->any())
        <div class="alert alert-primary">
            <ul class="text-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Marks Grade Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('store.mark.grade') }}" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <label for="inputMarkGradeName" class="form-label">Name</label>
                    <input name="mark_grade_name" type="text" class="form-control" placeholder="Mark Grade Name" aria-label="Mark Grade Name">
                </div>
                <div class="col">
                    <label for="inputMarkGradePoint" class="form-label">Point</label>
                    <input name="point" type="number" class="form-control" placeholder="Enter Point" aria-label="Mark Grade Point">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="inputPercentFrom" class="form-label">Percent from</label>
                    <input name="percent_from" type="number" class="form-control" placeholder="Enter Percent From" aria-label="Percent From">
                </div>
                <div class="col">
                    <label for="inputPercentUpto" class="form-label">Percent upto</label>
                    <input name="percent_upto" type="number" class="form-control" placeholder="Enter Percent Upto" aria-label="Percent Upto">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputRemarks" class="form-label">Remarks</label>
                    <input name="remark" type="text" class="form-control" placeholder="Enter Remarks" aria-label="Remarks">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>


@stop