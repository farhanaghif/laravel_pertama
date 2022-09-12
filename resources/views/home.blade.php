@extends('layouts.home.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    <div class="card mt-3"> --}}
                        <div class="card-body">
                            <h4 class="card-title text-center">My Project</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Project Name</th>
                                        <th class="text-center">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: {{ $project->progress }}%;"
                                                        aria-valuenow="{{ $project->progress }}" aria-valuemin="0"
                                                        aria-valuemax="100">{{ $project->progress }}%</div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
