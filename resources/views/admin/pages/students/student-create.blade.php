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
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputAdmissionNO" class="form-label">Admission NO</label>
                    <input type="number" class="form-control" placeholder="Enter Admission NO" aria-label="Admission NO">
                </div>
                <div class="col">
                    <label for="inputRollNO" class="form-label">Roll NO</label>
                    <input type="number" class="form-control" placeholder="Enter Roll NO" aria-label="Roll NO">
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
                    <label for="inputClass" class="form-label">Class</label>
                    <select id="inputClass" class="form-control">
                        <option selected>ONE</option>
                        <option>TWO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputSection" class="form-label">Section</label>
                    <select id="inputSection" class="form-control">
                        <option selected>A</option>
                        <option>B</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" placeholder="Select Date of Birth" aria-label="Date of Birth">
                </div>
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
                    <label for="inputSchoolLogo" class="form-label">Logo</label>
                    <input type="file" class="form-control" >
                </div>
                <div class="col">
                    <label for="inputAdmissionDate" class="form-label">Admission date</label>
                    <input type="date" class="form-control" placeholder="Select Admission date" aria-label="Admission date">
                </div>
                <div class="col">
                    <label for="inputStatus" class="form-label">Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>


@stop