@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="pb-2 mt-4 mb-4 border-bottom">
			<h1>
				{{ $profileUser->name }}
				<small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
			</h1>

		</div>

		@foreach($threads as $thread)
			<div class="card mb-4">
                <div class="card-header">
                    <a href="#">{{ $thread->creator->name }}</a> posted:
                    {{ $thread->title }}
                </div>

                <div class="card-body">
                    {{ $thread->body }}
                </div>
            </div>
		@endforeach

		{{ $threads->links() }}
	</div>
@endsection