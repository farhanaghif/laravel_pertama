@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('project.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="d-flex justify-content-between mb-2">
                                <p class="card-text mb-0">Tambah Project</p>
                                <a href="{{ route('project.index') }}"><button type="button"
                                        class="btn btn-warning">Kembali</button></a>
                            </div>
                            <div class="row">
                                <div class="form-floating mb-3 col-4">
                                    <input name="name" value="{{ $project->name }}" type="text" class="form-control"
                                        id="floatingInput">
                                    <label class="ms-2" for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 col-4">
                                    <input name="owner" value="{{ $project->owner }}" type="text" class="form-control"
                                        id="floatingInput">
                                    <label class="ms-3" for="floatingInput">Owner</label>
                                </div>
                                <div class="form-floating mb-3 col-4">
                                    <input name="leader_id" value="{{ $project->leader_id }}" type="number"
                                        class="form-control" id="floatingInput">
                                    <label class="ms-3" for="floatingInput">Leader ID</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-floating mb-3 col-6">
                                    <input name="deadline" value="{{ $project->deadline }}" type="date"
                                        class="form-control" id="floatingInput">
                                    <label class="ms-3" for="floatingInput">Deadline</label>
                                </div>
                                <div class="form-floating mb-3 col-6">
                                    <input name="progress" value="{{ $project->progress }}" type="number" min="0"
                                        max="100" class="form-control" id="floatingInput">
                                    <label class="ms-3" for="floatingInput">Progress</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="description" value="{{ $project->description }}" type="text"
                                    class="form-control" id="floatingInput">
                                <label class="ms-0" for="floatingInput">Description</label>
                            </div>
                            <button type="submit" class="btn btn-primary justify-content-end col-12">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
