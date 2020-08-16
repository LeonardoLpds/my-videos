@extends('template.main')

@section('content')
<div class="flex flex-wrap items-center justify-around">
    @foreach($videos as $video)
    @if(is_file("$path/$video") && strpos(mime_content_type("$path/$video"), "video") !== false)
    <!-- <div class="w-2/5 p-2 h-32">
        <div class="text-white font-bold bg-gray-800 w-full h-full text-center justify-center flex flex-col text-sm"> -->
            <video controls preload="none">
                <source src="/videos/{{$folder}}/{{$video}}" type="{{mime_content_type($path .'/'. $video)}}">
            </video>
        <!-- </div>
    </div> -->
    @endif
    @endforeach
</div>
@endsection