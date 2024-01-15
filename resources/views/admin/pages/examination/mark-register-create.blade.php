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
        <form action="{{ route('store.mark.register') }}" method="post">
            @csrf
            <div class="row align-items-center mb-4">
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <select name="class_id" id="inputClass" class="form-control">
                        <option value="" selected>Seclect</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputSection" class="form-label">Section</label>
                    <select name="section_id" id="inputSection" class="form-control">
                        <option value="" selected>SELECT</option>
                        <!-- Sections will be dynamically added here using JavaScript -->
                    </select>
                    </select>
                </div>
                <div class="col">
                    <label for="inputExamType" class="form-label">Exam Type</label>
                    <select name="exam_type_id" id="inputExamType" class="form-control">
                        <option value="" selected>Seclect</option>
                        @foreach ($exam_types as $exam_type)
                            <option value="{{ $exam_type->id }}">{{ $exam_type->exam_type_name }}</option>
                        @endforeach                        
                    </select>
                </div>
                <div class="col">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <select name="section_id" id="inputSubject" class="form-control">
                        <option value="" selected>Seclect</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                        @endforeach
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
                        {{-- <tr>
                            <td>Tamim</td>
                            <td>100</td>
                            <td>
                                <div class="row align-items-center mb-4">
                                    <div class="col">
                                        <label for="inputMCQ" class="form-label">MCQ</label>
                                        <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                    </div>
                                    <div class="col">
                                        <label for="inputMCQ" class="form-label">CQ</label>
                                        <input type="text" class="form-control" placeholder="Enter MCQ Number" aria-label="Mcq Number">
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
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

    var classId = $('#inputClass').val();
    var sectionId = $('#inputSection').val();
    var examTypeId = $('#inputExamType').val();
    var subjectId = $('#inputSubject').val();

    $("#list").empty(); // Clear old data before ajax

    if (classId && sectionId && examTypeId && sectionId) {
        // Prepare the data to be sent as parameters
        var requestData = {
            class_id: classId,
            section_id: sectionId,
            exam_type_id: examTypeId,
            subject_id: subjectId
        };
    }

    $.ajax({
        url: 'mark-register-filter',
        type: 'GET',
        dataType: 'json',
        data: requestData, // Pass the data as parameters
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


$(document).ready(function () {
    $('#inputClass').click(function () {
        var selectedClassId = $(this).val();
        if (selectedClassId !== 'SELECT') {
            $.ajax({
                url: '{{ route("get-data", ["classId" => ":classId"]) }}'.replace(':classId', selectedClassId),
                type: 'GET',
                success: function (data) {
                    // Handle the fetched data, e.g., update another dropdown or a div
                    console.log(data);

                    // Assuming data is an array with a single object
                    if (data.length > 0) {
                        var sections = JSON.parse(data[0].sections_id);
                        updateSectionDropdown(sections);
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

    function updateSectionDropdown(sections) {
        var inputSectionDropdown = $('#inputSection');
        inputSectionDropdown.empty(); // Clear existing options

        // Add default SELECT option
        inputSectionDropdown.append('<option selected>SELECT</option>');

        // Add options based on the fetched sections
        sections.forEach(function (sectionId) {
            // Assuming you have an array of sections with corresponding IDs
            var section = getSectionById(sectionId);
            if (section) {
                inputSectionDropdown.append('<option value="' + section.id + '">' + section.section_name + '</option>');
            }
        });
    }

    // Example function to get section by ID, replace it with your actual implementation
    function getSectionById(sectionId) {
        // Assuming you have an array of sections with corresponding IDs
        var sections = {!! json_encode($sections) !!};
        return sections.find(function (section) {
            return section.id == sectionId;
        });
    }
});

</script>

@stop