@extends('layouts.serio')

@section('serio-css')
    @parent

    <link type="text/css" rel="stylesheet" href="{{ asset('css/admin/addNewAdministrator.css') }}"/>
@endsection

@section('serio-js')
    @parent

    <script src="{{ asset('js/admin/addNewAdministrator.js') }}"></script>
@endsection