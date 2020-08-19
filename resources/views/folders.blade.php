@extends('template.main')

@section('content')
<h1 class="text-white font-bold">Suas pastas</h1>
<div class="flex flex-wrap items-center justify-around">
    @foreach($folders as $folder)
    <a href="/folder?folder={{$folder['name']}}" class="w-24 h-40 my-2">
        <div class="text-white font-bold bg-gray-800 w-full h-full text-center justify-center flex flex-col text-sm relative">
            <img src="{{$folder['image']}}" class="w-full h-full">
            <span class="absolute bg-black opacity-75 bottom-0">{{$folder['name']}}</span>
        </div>
    </a>
    @endforeach
</div>
@endsection