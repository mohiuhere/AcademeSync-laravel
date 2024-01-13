@extends('admin.layouts.default')


@section('title', 'Mark Distribution')

@section('page-heading', 'Mark Distribution')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Mark Distribution Table</h6>
        <a href={{route('create.mark.distribution.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Total Mark</th>
                        <th>Mark Distribution</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Total Mark</th>
                        <th>Mark Distribution</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                  @foreach ($mark_distributions as $mark_distribution)
                    <tr>
                        <td>{{ $mark_distribution->mark_distribution_name }}</td>
                        <td>{{ $mark_distribution->total }}</td>
                        <td>
                            <!-- Button trigger modal: data-target="#staticBackdrop-{id}"-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mark-distribution-{{ $mark_distribution->id }}">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                        <td>
                          @if($mark_distribution->status)
                              <span class="badge bg-primary text-white">Active</span>
                          @else
                              <span class="badge bg-danger text-white">Unactive</span>
                          @endif
                      </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('mark-distribution/edit/'.$mark_distribution->id) }}">Edit</a>
                                    <a class="dropdown-item" href="{{ url('mark-distribution/delete/'.$mark_distribution->id) }}">Delete</a>
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

<!-- Modal: id="teacher-sunject-{id}" -->
@foreach ($mark_distributions as $mark_distribution)
  <div class="modal fade" id="mark-distribution-{{ $mark_distribution->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Distribution</th>
                  <th scope="col">Mark</th>
                </tr>
              </thead>
                <tbody id="markDistributionDataBody">
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
          var distributionId = modalId.split('-').pop();
          // AJAX request to fetch data from the server
          $.ajax({
              url: '/getMarkDistribution/' + distributionId,
              type: 'GET',
              success: function(response) {
                  // Update modal body with the fetched data
                  $(modalId + ' #markDistributionDataBody').html(response);
              },
              error: function() {
                  console.log('Error fetching data from the server');
              }
          });
      });
  });
  </script>


@stop