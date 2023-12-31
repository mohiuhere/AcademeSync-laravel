@extends('admin.layouts.default')


@section('title', 'Teacher Edit')

@section('page-heading', 'Teacher Edit')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Teacher Create Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('edit.teacher') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputTeacherID" class="form-label">Teacher ID</label>
                    <input value="{{ $teacher->teacher_uid }}" name="teacher_uid" type="number" class="form-control" placeholder="Enter Teacher ID" aria-label="Teacher ID">
                </div>
                
                <div class="col">
                    <label for="inputFirstName" class="form-label">First name</label>
                    <input value="{{ $user->first_name }}" name="first_name" type="text" class="form-control" placeholder="Enter First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="inputLastName" class="form-label">Last name</label>
                    <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" placeholder="Enter Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputMobile" class="form-label">Mobile</label>
                    <input value="{{ $user->mobile }}" name="mobile" type="text" class="form-control" placeholder="Enter Mobile" aria-label="Mobile">
                </div>
                <div class="col">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input value="{{ $user->email }}" name="email" type="email" class="form-control" placeholder="Enter Email" aria-label="Email">
                </div>
                <div class="col">
                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                    <input value="{{ $user->date_of_birth }}" name="date_of_birth" type="date" class="form-control" placeholder="Select Date of Birth" aria-label="Date of Birth">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputBlood" class="form-label">Blood</label>
                    <select name="blood_group_id" id="inputBlood" class="form-control">
                        <option value="" selected>SELETE</option>
                        @foreach ($blood_groups as $blood_group)
                        <option value="{{ $blood_group->id }}" {{($blood_group->id == $user->blood_group_id) ? 'selected' : ''}}>
                            {{ $blood_group->blood_group_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select name="gender_id"  id="inputGender" class="form-control">
                        <option value="" selected>SELETE</option>
                        @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}" {{($gender->id == $user->gender_id) ? 'selected' : ''}}>
                            {{ $gender->gender_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputReligion" class="form-label">Religion</label>
                    <select name="religion_id"  id="inputReligion" class="form-control">
                        <option value="" selected>SELETE</option>
                        @foreach ($religions as $religion)
                        <option value="{{ $religion->id }}" {{($religion->id == $user->religion_id) ? 'selected' : ''}}>
                            {{ $religion->religion_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputBasicSalary" class="form-label">Basic salary</label>
                    <input value="{{ $teacher->basic_salary }}" name="salary" type="number" class="form-control" placeholder="Enter Basic salary" aria-label="Basic salary">
                </div>
                <div class="col">
                    <label for="inputEmergencyContact" class="form-label">Emergency contact</label>
                    <input value="{{ $teacher->emergency_contact }}" name="emergency_contact" type="text" class="form-control" placeholder="Enter Emergency contact" aria-label="Emergency contact">
                </div>
                <div class="col">
                    <label for="inputMaritalStatus" class="form-label">Marital status</label>
                    <select name="is_married" id="inputMaritalStatus" class="form-control">
                        <option selected>SELECT</option>
                        <option value="0" {{($teacher->is_married == '0') ? 'selected' : ''}}>Unmarried</option>
                        <option value="1" {{($teacher->is_married == '1') ? 'selected' : ''}}>Married</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputJoiningDate" class="form-label">Joining date</label>
                    <input value="{{ $teacher->joining_date }}" name="joining_date" type="date" class="form-control" placeholder="Select Joining Date" aria-label="Joining date">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Image</label>
                    <input value="{{ $user->image_url }}" name="user_img" type="file" class="form-control" >
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="1" {{($teacher->status == '1') ? 'selected' : ''}}>Active</option>
                        <option value="0" {{($teacher->status == '0') ? 'selected' : ''}}>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea name="address" type="text" class="form-control" placeholder="Enter Address" cols="50" rows="4">{{ $user->address }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Update</button>
        </form>
    </div>
</div>


@stop