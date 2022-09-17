<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Owner</th>
            <th scope="col">Progress</th>
            <th scope="col">Last Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $project->name }}</td>
                <td>{{ $project->leader->name }}</td>
                <td>{{ $project->progress }}%</td>
                <td>{{ $project->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
