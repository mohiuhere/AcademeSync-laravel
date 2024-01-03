@extends('admin.layouts.default')


@section('title', 'Class Setup')

@section('page-heading', 'Class Setup')

@section('bodys')


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header  row justify-content-md-center m-0">
        <h6 class="m-0 font-weight-bold text-primary col align-self-center">Class Setup Table</h6>
        <a href={{route('create.class-setup.index')}}><button class="btn btn-primary">Create</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($class_setups as $class_setup)
                    <tr>
                        <td>{{ $class_setup->class_name }}</td>
                        <td>
                            {{-- {{ $class_setup->sections_id }} --}}
                                @foreach (json_decode($class_setup->sections_id) as $section_id)

                                @foreach ($sections as $section)
                                    @if ((int)$section_id == $section->id)
                                        {{ $section->section_name }}
                                    @endif
                                @endforeach
                                    
                                @endforeach
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-list"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('class-setup/edit/'.$class_setup->id) }}">Edit</a>
                                    <a class="dropdown-item" href="{{ url('class-setup/delete/'.$class_setup->id) }}">Delete</a>
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