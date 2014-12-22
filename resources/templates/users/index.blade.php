@extends('layouts.master')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>User</th>
				<th>Last Seen</th>
				<th>Last IP</th>
				<th>Total Plays</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>
						<a href="{{ url('users', $user->user) }}">{{ $user->user }}</a>
					</td>
					<td>
						{{ $user->time }}
					</td>
					<td>
						{{ $user->ip_address }}
					</td>
					<td>
						{{ $user->time }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop