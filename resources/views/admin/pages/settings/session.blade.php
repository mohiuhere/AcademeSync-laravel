@extends('admin.layouts.default')


@section('title', 'Session')

@section('page-heading', 'Session')

@section('bodys')


<div class="card shadow mb-4">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-primary">
            <ul class="text-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('active.session') }}" method="post">
            @csrf
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">
                    Set Session
                </h1>
            </div>
            <div class="col">

                    <label for="inputStatus" class="form-label">Active Session</label>
                    <select name="active_session_id" id="inputActiveSessionId" class="form-control">
                        <option value="">SELECT</option>
                        @foreach ($datas as $data)
                            <option value="{{ $data->id }}" {{ (session()->get('active_session_list_id') == $data->id) ? 'selected' : '' }}>
                                {{ $data->session_list_name }}
                            </option>
                        @endforeach
                    </select>

            </div>
            <div class="col align-self-end">
                <button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Activate</button>
            </div>
        </div>
    </form>
    </div>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Session Table</h6>
        <a href={{route('create.session.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->session_list_name }}</td>
                            <td>{{ $data->start_date }}</td>
                            <td>{{ $data->end_date }}</td>
                            <td>
                                @if($data->status)
                                    <span class="badge bg-primary text-white">Active</span>
                                @else
                                    <span class="badge bg-danger text-white">Unactive</span>
                                @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-list"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('session/edit/'.$data->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ url('session/delete/'.$data->id) }}">Delete</a>
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


@stop