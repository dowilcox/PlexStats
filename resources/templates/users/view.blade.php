@extends('layouts.master')

@section('content')
	<h1>{{ $history[0]->user }}</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Platform</th>
			</tr>
		</thead>
		<tbody>
			@foreach($history as $item)
				<tr>
					<td>
						{{ $item->id }}
					</td>
					<td>
						<a href="{{ url('history', $item->id) }}">{{ $item->title }}</a>
					</td>
					<td>
						{{ $item->platform }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop