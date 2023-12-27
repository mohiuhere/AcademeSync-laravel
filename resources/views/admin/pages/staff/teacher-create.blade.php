@extends('admin.layouts.default')


@section('title', 'Teacher Create')

@section('page-heading', 'Teacher Create')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Teacher Create Input</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputTeacherID" class="form-label">Teacher ID</label>
                    <input type="number" class="form-control" placeholder="Enter Teacher ID" aria-label="Teacher ID">
                </div>
                
                <div class="col">
                    <label for="inputFirstName" class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="Enter First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="inputLastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" placeholder="Enter Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputMobile" class="form-label">Mobile</label>
                    <input type="number" class="form-control" placeholder="Enter Mobile" aria-label="Mobile">
                </div>
                <div class="col">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" aria-label="Email">
                </div>
                <div class="col">
                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" placeholder="Select Date of Birth" aria-label="Date of Birth">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputReligion" class="form-label">Religion</label>
                    <select id="inputReligion" class="form-control">
                        <option selected>Islam</option>
                        <option>Islam</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select id="inputGender" class="form-control">
                        <option selected>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputBlood" class="form-label">Blood</label>
                    <select id="inputBlood" class="form-control">
                        <option selected>A+</option>
                        <option>B-</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputBasicSalary" class="form-label">Basic salary</label>
                    <input type="number" class="form-control" placeholder="Enter Basic salary" aria-label="Basic salary">
                </div>
                <div class="col">
                    <label for="inputEmergencyContact" class="form-label">Emergency contact</label>
                    <input type="email" class="form-control" placeholder="Enter Emergency contact" aria-label="Emergency contact">
                </div>
                <div class="col">
                    <label for="inputMaritalStatus" class="form-label">Marital status</label>
                    <select id="inputMaritalStatus" class="form-control">
                        <option selected>Unmarried</option>
                        <option>Married</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputJoiningDate" class="form-label">Joining date</label>
                    <input type="date" class="form-control" placeholder="Select Joining Date" aria-label="Joining date">
                </div>
                <div class="col">
                    <label for="inputSchoolLogo" class="form-label">Image</label>
                    <input type="file" class="form-control" >
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea type="text" class="form-control" placeholder="Enter Address" cols="50" rows="4"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>


@stop