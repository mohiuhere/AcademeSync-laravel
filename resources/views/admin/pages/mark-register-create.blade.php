@extends('admin.layouts.default')


@section('title', 'Mark Register Create')

@section('page-heading', 'Mark Register Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Mark Register Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <label for="inputStatus" class="form-label">Class</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Seclect</option>
                        <option>ONE</option>
                        <option>TWO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Section</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Seclect</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Exam Type</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Seclect</option>
                        <option>First</option>
                        <option>Final</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Subject</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Seclect</option>
                        <option>Bangla</option>
                        <option>English</option>
                    </select>
                </div>
                <div class="col-1 align-self-end">
                    <button id="mark-register-filter" class="btn btn-primary" type="button">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Total Mark</th>
                        <th>Mark Distribution</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Student Name</th>
                        <th>Total Mark</th>
                        <th>Mark Distribution</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tamim</td>
                        <td>100</td>
                        <td>
                            <div class="row align-items-center mb-4">
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tamim</td>
                        <td>100</td>
                        <td>
                            <div class="row align-items-center mb-4">
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                                <div class="col">
                                    <label for="inputMCQ" class="form-label">MCQ</label>
                                    <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
 $('#mark-register-filter').click(function(event) {
    $("#list").empty();//Clear old data before ajax
    $.ajax({
        url : {{route('api/mark-register-filter')}},
        type : 'GET',
        dataType : 'json',
        success : function(data) {
            var table = $("#list");
            $.each(data, function(idx, elem) {
                table.append("<tr><td>" + elem.user + "</td></tr>");
            });

        },
        error : function() {
            alert('There was an error');
        }
    });
});
</script>

@stop