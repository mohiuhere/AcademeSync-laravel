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
        <form action="{{ route('store.exam.setup') }}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col">
                    <label for="inputExamType" class="form-label">Exam Type</label>
                    <select name="exam_type_id" id="inputExamType" class="form-control">
                        <option value="" selected>Select</option>
                        @foreach ($exam_types as $exam_type)
                            <option value="{{ $exam_type->id }}">{{ $exam_type->exam_type_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputMarkDistribution" class="form-label">Mark Distribution</label>
                    <select name="mark_distribution_id" id="inputMarkDistribution" class="form-control">
                        <option value="" selected>Select</option>
                        @foreach ($mark_distributions as $mark_distribution)
                            <option value="{{ $mark_distribution->id }}">{{ $mark_distribution->mark_distribution_name }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <select name="class_id" id="inputClass" class="form-control">
                        <option value="" selected>Select</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                        
                    </select>
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