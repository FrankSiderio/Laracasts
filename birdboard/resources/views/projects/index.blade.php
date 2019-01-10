@forelse($projects as $project)
    <p>{{ $project->title }}</p>

@empty
    <p>No projects yet</p>
@endforelse