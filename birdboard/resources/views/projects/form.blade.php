@csrf

<div class="field mb-6">
    <label class="label text-sm mb-2 block">Title</label>

    <div class="control">
        <input type="text"
               class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
               name="title"
               placeholder="Title"
               value="{{ $project->title }}" required>
    </div>
</div>

<div class="field mb-6">
    <label class="label text-sm mb-2 block">Description</label>

    <div class="control">
        <input
            type="text"
            class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
            name="description"
            placeholder="Description"
            value="{{ $project->description }}" required>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}">Cancel</a>
    </div>
</div>

@if($errors->any())
    <div class="field mt-6">
        @foreach($errors->all() as $error)
            <li class="text-sm text-red">{{ $error }}</li>
        @endforeach
    </div>
@endif
