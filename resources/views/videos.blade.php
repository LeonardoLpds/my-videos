@extends('template.main')

@section('content')
<div class="flex flex-wrap items-center justify-around">
    @foreach($videos as $video)
    @if(is_file("$path/$video") && strpos(mime_content_type("$path/$video"), "video") !== false)
    <div class="w-full p-1 overflow-hidden searchBlock {{strtolower($video)}}">
        <!-- <div class="text-white font-bold bg-gray-800 w-full h-full text-center justify-center flex flex-col text-sm"> -->
            <label class="text-white font-bold text-xs whitespace-no-wrap overflow-hidden">{{$video}}</label>
            <video controls preload="none" width="100%" height="auto" class="min-h-48">
                <source src="/videos{{$folder}}/{{$video}}" type="{{mime_content_type($path .'/'. $video)}}">
            </video>
        <!-- </div> -->
    </div>
    @endif
    @endforeach
</div>
@endsection