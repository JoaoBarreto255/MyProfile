@php
$title = "Profile Profissional";
@endphp

@extends('hyde::layouts.app')
@section('content')

<main class="mx-auto dark:bg-slate-800 text-black dark:text-white max-w-7xl py-16 px-8">
    <div class="bg-cover bg-center font-sans bg-[url('/media/_media/cover-jumbontrom-1.jpeg')] bg-clip-border rounded-sm shadow-lg mx-auto mb-6">
        <div class="flex md:flex-wrap md:flex-nowrap md:flex-row flex-col md:py-24 md:px-8 p-6 hover:backdrop-blur-sm bg-gradient-to-b from-[rgba(71,85,105,0.6)] to-transparent">
        </div>
    </div>

    <h1 class="text-3xl font-bold font-sans text-center text-slate-700 w-100">Quem sou eu?</h1>
    <div class="flex md:flex-wrap md:flex-nowrap md:flex-row flex-col md:py-24 md:px-8 p-6">
        <div class="flex flex-col md:flex-row md:basis-1/6 basis-1 md:grow-0 grow justify-center items-center">
            <img src="../media/minha-foto.jpeg" width="200" heigth="200" style="border-radius: 50%"></img>
        </div>
        <div class="flex grow flex-col md:basis-5/6 basis-1 justify-center py-4 p-8">
            <p class="text-xl text-wrap text-justify">
                Meu nome é <strong>João Barreto</strong>, nasci entre o lançamento Python e Lua.
                Sou formado em bacharel de ciências da computação no ano pela Universidade Federal de Roraima.
                De maneira em geral sei programar bem em Python e principalmente PHP, nas stacks que especificarei abaixo
                Sou um programador que aprendo rápido, e consigo me focar bem nos problemas, atualmente sou programador pleno em PHP
                e tenho bastante experiência em python e conceitos relacionados ao trabalho.
            </p>
        </div>
    </div>
    <div class="mb-5 items-center w-100">
        <h1 class="text-xl font-bold font-sans text-slate-700">Contatos disponíveis:</h1>
        @php($badge_link_contact="inline-flex items-center rounded-md bg-gray-50 hover:bg-gray-600 px-2 py-2 text-xs font-medium text-gray-600 hover:text-gray-50 ring-2 ring-inset ring-gray-500/10")
        <a class="{{$badge_link_contact}}" href="https://www.linkedin.com/in/jo%C3%A3o-luiz-costa-barreto-5b5853163/" target="_blank"><img src="media/LI-In-Bug.png" width="20px" class="mr-1"></img> Linkedin</a>
        <a class="{{$badge_link_contact}}" href="https://github.com/JoaoBarreto255" target="_blank"><img src="media/github-mark.svg" width="18px" class="mr-1"></img>GitHub</a>
    </div>
    @foreach(DataCollections::yaml('skills_pt') as $skill)
        <hr>
        <div class="flex flex-col font-sans mt-3">
            <h1 class="text-center text-3xl font-bold">{{ $skill->title }}</h1>
            @foreach($skill->data as $name => $skill_info)
            <div>
                <h1 class="text-center text-2xl font-bold"> {{ $name }} {{ $skill_info['version'] ?? '' }} </h1>
                @foreach($skill_info['data'] as $tool_name => $tool_data)
                <a class="flex flex-row align-center text-justify-center" href="{{ $tool_data['url'] }}">
                    @if(isset($tool_data['icon']['src']))
                    <img src="{{ $tool_data['icon']['src'] }}" style="min-height: 25px; max-width: 50px;"></img>
                    @endif
                    <h4>{{ $tool_name }}</h4>
                </a>
                @endforeach
            </div>
            @endforeach
       </div>
    @endforeach

</main>

@endsection
