@extends('layouts.admin.allUsers')

@section('title', 'dashboard')
@section('content')
    <h3>Administrators</h3>

    <a class="btn btn-primary" href="{{ route('admin.addNewAdministrator') }}" role="button">Add New Administrator</a>

    @livewire('admin.dashboard')

    <div class="card">
        <div class="card-body">
            <table id="users" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection
