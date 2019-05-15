@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('push') }}">Make Push</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('push_statistics') }}">Statistics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('push_cron') }}">Cron</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('push_setting') }}">Settings</a>
                </li>
            </ul>
            @yield('content_push')
        </div>
    </div>
@endsection