@extends('template.main')

@section('content')
<div class="flex flex-wrap items-center justify-around">
    @foreach($folders as $folder)
    <a href="/folder?folder={{$folder}}" class="w-2/5 p-2 h-32">
        <div class="text-white font-bold bg-gray-800 w-full h-full text-center justify-center flex flex-col text-sm">
            {{$folder}}
        </div>
    </a>
    @endforeach
</div>
@endsection