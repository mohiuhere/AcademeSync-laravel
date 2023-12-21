@extends('admin.layouts.default')


@section('title', 'Subject Assign Create')

@section('page-heading', 'Subject Assign Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Subject Assign Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputState" class="form-label">Class</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">Section</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-4">
                    <h5>Add Subject & Teacher</h5>
                </div>
                <div class="col offset-7">
                    <button class="btn btn-success add_item_button"><i class="fa-solid fa-plus"></i> Add</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11 d-flex">
                    <strong class="col-md-4">Subject</strong>
                    <strong class="col-md-4 offset-md-2">Teacher</strong>
                </div>
            </div>
            <hr class="mt-0">
            <div id="show_item">
                {{-- <div class="row">
                    <div class="col-md-11 mb-3 d-flex">
                        <input type="text" name="author_name[]" class="form-control mr-2" placeholder="Author Name">
                        <input type="text" name="author_email[]" class="form-control mr-2" placeholder="Author Email">
                    </div>
                    <div class="col-md-1 mb-3 d-grid">
                        <button class="btn btn-danger remove_item_button"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div> --}}
            </div>
        </form>
    </div>
</div>



<script>
    $(document).ready(function(){
        $(".add_item_button").click(function(e){
            e.preventDefault();
            $("#show_item").prepend(`<div class="row">
                        <div class="col-md-11 mb-3 d-flex">
                            <select name="subject_id[]" class="form-control mr-2">
                                <option value="">SELECT SUBJECT</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject['id'] }}">{{ $subject['name'] }}</option>
                                @endforeach
                            </select>
                            <select name="teacher_id[]" class="form-control mr-2">
                                <option value="">SELECT TEACHER</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher['id'] }}">{{ $teacher['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1 mb-3 d-grid">
                            <button class="btn btn-danger remove_item_button"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>`)
        });

        $(document).on('click', '.remove_item_button', function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        })
    });
</script>

@stop