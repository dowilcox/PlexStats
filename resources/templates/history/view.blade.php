@extends('layouts.master')

@section('content')
	<h1>{{ $item->title }}</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>User</th>
				<th>Platform</th>
			</tr>
		</thead>
		<tbody>
			@foreach($views as $item)
				<tr>
					<td>
						{{ $item->id }}
					</td>
					<td>
						{{ $item->user }}
					</td>
					<td>
						{{ $item->platform }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop