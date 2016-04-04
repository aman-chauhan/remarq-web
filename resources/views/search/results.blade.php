@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <h3>Your search results for "{{ Request::input('query') }}"</h3>
        @if (!$users->count())
                <p>
                        Sorry! No results found!
                </p>
        @else
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12">

                                        @foreach ($users as $user)
                                                @include('user/partials/userblock')
                                        @endforeach
                                </div>
                        </div>
                </div>
        @endif
@stop
