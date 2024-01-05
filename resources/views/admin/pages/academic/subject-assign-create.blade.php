@extends('admin.layouts.default')


@section('title', 'Subject Assign Create')

@section('page-heading', 'Subject Assign Create')

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
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Subject Assign Input</h6>
    </div>
    <div class="card-body">
        <form action={{route('store.subject-assign')}} method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <select name="class_id" id="inputClass" class="form-control">
                        <option selected>SELECT</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputSection" class="form-label">Section</label>
                    <select name="section_id" id="inputSection" class="form-control">
                        <option selected>SELECT</option>
                        <!-- Sections will be dynamically added here using JavaScript -->
                    </select>
                </div>
                
            </div>
            <div class="row my-3">
                <div class="col-4">
                    <h5>Add Subject & Teacher</h5>
                </div>
                <div class="col offset-7">
                    <button class="btn btn-primary add_item_button"><i class="fa-solid fa-plus"></i> Add</button>
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
            <button class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
        </form>
    </div>
</div>



<script>


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





    $(document).ready(function(){
        $(".add_item_button").click(function(e){
            e.preventDefault();
            $("#show_item").prepend(`<div class="row">
                        <div class="col-md-11 mb-3 d-flex">
                            <select name="subject_id[]" class="form-control mr-2">
                                <option value="" selected>SELECT SUBJECT</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject['id'] }}">{{ $subject['subject_name'] }}</option>
                                @endforeach
                            </select>
                            <select name="teacher_id[]" class="form-control mr-2">
                                <option value="" selected>SELECT TEACHER</option>
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