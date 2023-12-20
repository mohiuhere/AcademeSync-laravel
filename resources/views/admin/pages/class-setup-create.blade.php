@extends('admin.layouts.default')


@section('title', 'Class Setup Create')

@section('bodys')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Class Setup Create</h1>


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
                        <select name="" id="inputState" class="form-control">
                            <option value="" selected>SELECTE</option>
                            <option value="">ONE</option>
                            <option value="">TWO</option>
                        </select>
                    </div>
                    <div class="col">
                        <h6>Select Sections:</h6>
                        <label style="font-size: 20px"><input style="height: 20px;width: 20px;" type="checkbox" value="1" name="sections[]"> A </label>        
                        <label style="font-size: 20px"><input style="height: 20px;width: 20px;" type="checkbox" value="2" name="sections[]"> B </label>       
                    </div>
                    <div class="col-12 my-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
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