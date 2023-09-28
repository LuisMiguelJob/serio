@extends('layouts.serio')

@section('serio-css')
    @parent

    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/admin/allUsers.css') }}"/>

@endsection

@section('serio-js')
    @parent

    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('js/admin/allUsers.js') }}"></script>

@endsection
