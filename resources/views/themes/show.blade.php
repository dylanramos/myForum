@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Theme: {{ $theme->name }}</h1>
    @foreach ($theme->topics as $topic)
        <div class="border border-dark p-2">
            <a href="">{{ $topic->description }}</a>
        </div>
    @endforeach
@endsection
