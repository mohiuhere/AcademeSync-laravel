@extends('admin.layouts.default')


@section('title', 'Subject Assign')

@section('page-heading', 'Subject Assign')

@section('bodys')



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Subject Assign Table</h6>
        <a href={{route('create.subject-assign.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Class (Section)</th>
                        <th>Subject & Teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Class (Section)</th>
                        <th>Subject & Teacher</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                  @foreach ($subject_assigns as $subject_assign)
                    <tr>
                        <td>{{ $subject_assign->class_name }} ({{ $subject_assign->section_name }})</td>
                        <td>
                            <!-- Button trigger modal: data-target="#staticBackdrop-{id}"-->
                            <button type="button" id="#teacher-subject-{{ (string)$subject_assign->id }}" class="btn btn-primary" data-toggle="modal" data-target="#teacher-subject-{{ (string)$subject_assign->id }}">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ url('subject-assign/edit/'.$subject_assign->id) }}">Edit</a>
                                  <a class="dropdown-item" href="{{ url('subject-assign/delete/'.$subject_assign->id) }}">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Modal: id="teacher-subject-{id}" -->
@foreach ($subject_assigns as $subject_assign)
  <div class="modal fade" id="teacher-subject-{{ (string)$subject_assign->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Teachers And Subjects List</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Teacher</th>
                <th scope="col">Subject</th>
              </tr>
            </thead>
            <tbody id="subjectAssignDataBody">
              <!-- Dynamic content will be placed here -->
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach


<script>
  $(document).ready(function() {
      $('.btn-primary').on('click', function() {
          var modalId = $(this).data('target');
          var subjectAssignId = modalId.split('-').pop();
          // AJAX request to fetch data from the server
          $.ajax({
              url: '/getSubjectAssignData/' + subjectAssignId,
              type: 'GET',
              success: function(response) {
                  // Update modal body with the fetched data
                  $(modalId + ' #subjectAssignDataBody').html(response);
              },
              error: function() {
                  console.log('Error fetching data from the server');
              }
          });
      });
  });
  </script>

@stop