@extends('admin.layouts.default')


@section('title', 'Teacher Create')

@section('page-heading', 'Teacher Create')

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
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Teacher Create Input</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('store.teacher') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="inputTeacherID" class="form-label">Teacher ID</label>
                    <input name="teacher_uid" type="number" class="form-control" placeholder="Enter Teacher ID" aria-label="Teacher ID">
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
                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                    <input name="date_of_birth" type="date" class="form-control" placeholder="Select Date of Birth" aria-label="Date of Birth">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputBlood" class="form-label">Blood</label>
                    <select name="blood_group_id" id="inputBlood" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($blood_groups as $blood_group)
                        <option value="{{ $blood_group->id }}">{{ $blood_group->blood_group_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select name="gender_id"  id="inputGender" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->gender_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputReligion" class="form-label">Religion</label>
                    <select name="religion_id"  id="inputReligion" class="form-control">
                        <option value="" selected>SELECT</option>
                        @foreach ($religions as $religion)
                        <option value="{{ $religion->id }}">{{ $religion->religion_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputBasicSalary" class="form-label">Basic salary</label>
                    <input name="salary" type="number" class="form-control" placeholder="Enter Basic salary" aria-label="Basic salary">
                </div>
                <div class="col">
                    <label for="inputEmergencyContact" class="form-label">Emergency contact</label>
                    <input name="emergency_contact" type="text" class="form-control" placeholder="Enter Emergency contact" aria-label="Emergency contact">
                </div>
                <div class="col">
                    <label for="inputMaritalStatus" class="form-label">Marital status</label>
                    <select name="is_married" id="inputMaritalStatus" class="form-control">
                        <option selected>SELECT</option>
                        <option value="0" >Unmarried</option>
                        <option value="1">Married</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputJoiningDate" class="form-label">Joining date</label>
                    <input name="joining_date" type="date" class="form-control" placeholder="Select Joining Date" aria-label="Joining date">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Image</label>
                    <input name="user_img" type="file" class="form-control" >
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


@stop