@extends('admin.layouts.default')


@section('title', 'Student Create')

@section('page-heading', 'Student Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Student Create Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('store.student.index') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputAdmissionNO" class="form-label">Admission NO</label>
                    <input name="admission_no" type="number" class="form-control" placeholder="Enter Admission NO" aria-label="Admission NO">
                </div>
                <div class="col">
                    <label for="inputRollNO" class="form-label">Roll NO</label>
                    <input name="roll_no" type="number" class="form-control" placeholder="Enter Roll NO" aria-label="Roll NO">
                </div>
                <div class="col">
                    <label for="inputFirstName" class="form-label">First name</label>
                    <input name="first_name" type="text" class="form-control" placeholder="Enter First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="inputLastName" class="form-label">Last name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="Enter Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputMobile" class="form-label">Mobile</label>
                    <input name="mobile" type="text" class="form-control" placeholder="Enter Mobile" aria-label="Mobile">
                </div>
                <div class="col">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter Email" aria-label="Email">
                </div>
                <div class="col">
                    <label for="inputClass" class="form-label">Class</label>
                    <select name="class_id" id="inputClass" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
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
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                    <input name="date_of_birth" type="date" class="form-control" placeholder="Select Date of Birth" aria-label="Date of Birth">
                </div>
                <div class="col">
                    <label for="inputReligion" class="form-label">Religion</label>
                    <select name="religion_id" id="inputReligion" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($religions as $religion)
                        <option value="{{ $religion->id }}">{{ $religion->religion_name }}</option>
                        @endforeach
                    </select>
                    </select>
                </div>
                <div class="col">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select name="gender_id" id="inputGender" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->gender_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputBlood" class="form-label">Blood</label>
                    <select name="blood_group_id" id="inputBlood" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($blood_groups as $blood_group)
                        <option value="{{ $blood_group->id }}">{{ $blood_group->blood_group_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputAdmissionDate" class="form-label">Admission date</label>
                    <input name="admission_date" type="date" class="form-control" placeholder="Select Admission date" aria-label="Admission date">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Image</label>
                    <input name="image_url" type="file" class="form-control" >
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea name="address" type="text" class="form-control" placeholder="Enter Address" cols="50" rows="4"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
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
</script>



@stop