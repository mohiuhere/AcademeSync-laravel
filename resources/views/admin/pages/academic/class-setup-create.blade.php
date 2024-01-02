@extends('admin.layouts.default')


@section('title', 'Class Setup Create')

@section('page-heading', 'Class Setup Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Class Setup Input</h6>
    </div>
    <div class="card-body">
        <form action={{route('store.class-setup')}} method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputState" class="form-label">Class</label>
                    <select name="class_id" id="inputState" class="form-control">
                        <option value="" selected>SELECTE</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col">
                    <h6>Select Sections:</h6>
                    @foreach ($sections as $section)
                    <label style="font-size: 20px">
                        <input style="height: 20px;width: 20px;" type="checkbox" value="{{ $section->id }} " name="sections_id[]">
                         {{ $section->section_name }} 
                        </label>        
                    @endforeach
     
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>



<script>
    $("submit").click(function(){
        var arr = [];
        $.each($("sections[]:checked"), function(){
            arr.push($(this).val());
        });
    });
</script>

@stop