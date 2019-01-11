@extends ('layouts.app')

@section('content')
    <form method="POST" action="/projects">
        @csrf

        <h1>Create a Project</h1>

        <div>
            <label>Title</label>

            <input type="text" name="title" placeholder="Title">
        </div>

        <div>
            <label>Description</label>

            <input type="text" name="description" placeholder="Description">
        </div>

        <div>
            <button type="submit">Submit</button>
            <a href="/projects">Cancel</a>
        </div>
    </form> 

@endsection