@extends('admin.layouts.default')


@section('title', 'Fees Collect')

@section('page-heading', 'Fees Collect')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Fees Collect Input</h6>
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
                    <label for="inputRoll" class="form-label">Roll</label>
                    <input type="number" class="form-control" placeholder="Exam Roll" aria-label="Exam Roll">
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
            <form action={{route('store.mark.register')}} method="post">
                @csrf
                <table class="table table-bordered">
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
                    <tbody id="list">
                        <tr>
                            <td>Tamim</td>
                            <td>Active</td>
                            <td>
                                <a href={{url('fee-collect/collect/1')}}><button class="btn btn-primary" type="button">
                                    Collect
                                </button></a>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary" type="submit">
                    <i class="far fa-save"></i>
                </button>
            </form>
        </div>
    </div>
</div>


<script>


$('#mark-register-filter').click(function(event) {
    $("#list").empty(); // Clear old data before ajax
    $.ajax({
        url: 'mark-register-filter',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Assuming your data is an array of items
            var htmlContent = '';
            $.each(data, function(index, item) {
                // Create HTML content based on the item using a template string
                htmlContent += '<tr>';
                htmlContent += `<td>${item.name}</td>`;
                htmlContent += `<td>${item.age}</td>`;
                htmlContent += '<td>';
                htmlContent += '<div class="row align-items-center mb-4">';

                // Assuming item.inputs is an array
                $.each(item.inputs, function(i, input) {
                    var array_name = input+"[]";
                    htmlContent += `
                        <div class="col">
                            <label for="inputMCQ" class="form-label">MCQ</label>
                            <input type="text" class="form-control" value="${input}" name="${array_name}" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                        </div>
                    `;
                });

                htmlContent += '</div>';
                htmlContent += '</td>';
                htmlContent += '</tr>';
            });

            // Append the HTML content to the #list element
            $("#list").append(htmlContent);
        },
        error: function() {
            alert('There was an error');
        }
    });
});


</script>




@stop