@extends('layouts.app')

@section('content')
    @include('users.table')
@endsection

@section('extra-footer')
    <script src="{{asset('js/datatables/base/html-table.js')}}" type="text/javascript"></script>
@endsection