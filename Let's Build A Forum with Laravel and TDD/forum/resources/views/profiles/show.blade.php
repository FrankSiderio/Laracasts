@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="pb-2 mt-4 mb-4 border-bottom">
					<h1>
						{{ $profileUser->name }}
						<small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
					</h1>

				</div>

				@foreach($threads as $thread)
					<div class="card mb-4">
		                <div class="card-header">
		                	<div class="level">
		                		<span class="flex">
		                    		<a href="/profiles/{{ $thread->creator->name }}">{{ $thread->creator->name }}</a> posted:
		                    		<a href="{{ $thread->path() }}">{{ $thread->title }}</a>
		                    	</span>

		                    	<span>{{ $thread->created_at->diffForHumans() }}</span>
		                    </div>
		                </div>

		                <div class="card-body">
		                    {{ $thread->body }}
		                </div>
		            </div>
				@endforeach

				{{ $threads->links() }}

			</div>
		</div>

	</div>
@endsection