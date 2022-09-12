@extends('layouts.home.user')

@section('content')
    <div class="pagetitle">
        <h1>Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p style="margin-bottom: 0%">Project Management</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-create">
                                Tambah
                            </button>
                            @extends('project.partials.modal-form-create')
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Task</th>
                                    <th>Leader</th>
                                    <th>Owner</th>
                                    <th>Deadline</th>
                                    <th>Progress</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->tasks_count }}</td>
                                        <td>{{ $project->leader->name }}</td>
                                        <td>{{ $project->owner }}</td>
                                        <td>{{ $project->deadline }}</td>
                                        <td>{{ $project->progress }}%</td>
                                        <td style="text-align: center" class="d-flex justify-content-center">
                                            <a href="{{ route('project.show', $project->id) }}" class="btn btn-success mx-1"
                                                role="button">Show</a>
                                            <a href="{{ route('project.edit', $project->id) }}"
                                                class="btn btn-warning mx-1" role="button">Edit</a>
                                            <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal"
                                                data-bs-target="#modal-delete">Delete</button>
                                            @extends('project.partials.modal-delete')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
