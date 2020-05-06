@extends('layouts.app')

@section('content')
<div class="lg:flex justify-between ">
    <div class="lg:w-32">
        @include('_sidebar-links')
    </div>
    <div class="flex-1 lg:mx-10" style="max-width: 700px">
        @include('_publish-tweet-panel')
        <div class="border border-grey-300 rounded-lg ">
            @foreach ($tweets as $tweet)
        @include('_tweet')
            @endforeach
        </div>
    </div>
</div>

@endsection
