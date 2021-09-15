@extends('layouts.app')
@section('content')
<div class="container users-table">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Admin</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Total Orders</th>
                    <th scope="col">Order Analysis</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-dark ">
                @if(count($users) > 0)
                    @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
                      <td>{{ date('d.m.Y', strtotime($user->created_at)) }}</td>
                      <td>{{ $user->orders->count() }}</td>
                      <td> <a href="{{ url('/analysis/' . $user->id) }}" title="View Order"><button class="btn btn-info btn-xs text-white"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a></td>

                    </tr>
                    @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="text-center">No Users at the moment.</td>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection