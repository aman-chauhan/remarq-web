@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="page-header">
                <h2>Search <small>Your search results for "{{ Request::input('query') }}"</small></h2>
        </div>
        <div class="panel panel-primary">
                <div class="panel-heading">
                        <h5 style="color:#FFFFFF;">Found {{ $users->count() }} results</h5>
                </div>
                <ul class="list-group">
                        @if (!$users->count())
                                <li class="list-group-item">Bummer.</li>
                        @else
                                @foreach ($users as $user)
                                        <li class="list-group-item">
                                                @include('user/partials/userblock')
                                        </li>
                                @endforeach
                        @endif
                </ul>
        </div>
@stop
