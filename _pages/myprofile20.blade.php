@php
$title = "Profile Profissional";
@endphp

@extends('hyde::layouts.app')
@section('content')

<main class="mx-auto max-w-7xl py-16 px-8">
    <h1 class="text-center text-3xl font-bold">MyProfile20</h1>
    @foreach(DataCollections::markdown('skills_pt/tools') as $tools)
        <div>
            <big> {{ $tools->matter->title }} </big>
            <small> {{ $tools->markdown->toHtml() }} </small>
        </div>
    @endforeach
</main>

@endsection
