@extends('layouts.master')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>User</th>
				<th>Title</th>
				<th>Platform</th>
			</tr>
		</thead>
		<tbody>
			@foreach($items as $item)
				<tr>
					<td>
						{{ $item->id }}
					</td>
					<td>
						<a href="{{ url('users', $item->user) }}">{{ $item->user }}</a>
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