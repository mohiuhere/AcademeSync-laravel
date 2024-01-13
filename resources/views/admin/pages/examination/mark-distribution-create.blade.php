@extends('admin.layouts.default')


@section('title', 'Mark Distribution Create')

@section('page-heading', 'Mark Distribution Create')

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
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Mark Distribution Input</h6>
    </div>
    <div class="card-body">
        <form action={{route('store.mark.distribution')}} method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputMarkDistributionName" class="form-label">Name</label>
                    <input name="mark_distribution_name" type="text" class="form-control" placeholder="Enter Mark Distribution Name" aria-label="Mark Distribution Name">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-4">
                    <h5>Add Mark Distribution</h5>
                </div>
                <div class="col offset-7">
                    <button class="btn btn-success add_item_button"><i class="fa-solid fa-plus"></i> Add</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11 d-flex">
                    <strong class="col-md-4">Description</strong>
                    <strong class="col-md-4 offset-md-2">Allot Marks</strong>
                </div>
            </div>
            <hr class="mt-0">
            <div id="mark_distribution_show_item">
                {{-- <div class="row">
                    <div class="col-md-11 mb-3 d-flex">
                        <input type="text" name="mark_description[]" class="form-control mr-2" placeholder="Enter Description Name">
                        <input type="text" name="allot_marks[]" class="form-control mr-2" placeholder="Enter Allot Mark">
                    </div>
                    <div class="col-md-1 mb-3 d-grid">
                        <button class="btn btn-danger remove_item_button"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div> --}}
            </div>
            <button class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>



<script>
    $(document).ready(function(){
        $(".add_item_button").click(function(e){
            e.preventDefault();
            $("#mark_distribution_show_item").prepend(`<div class="row">
                    <div class="col-md-11 mb-3 d-flex">
                        <input type="text" name="mark_descriptions[]" class="form-control mr-2" placeholder="Enter Description Name">
                        <input type="text" name="allot_marks[]" class="form-control mr-2" placeholder="Enter Allot Mark">
                    </div>
                    <div class="col-md-1 mb-3 d-grid">
                        <button class="btn btn-danger remove_item_button"><i class="fa-solid fa-xmark"></i></i></button>
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