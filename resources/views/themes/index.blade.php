@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">List Theme</h1>
    @forelse($themes as $theme)
        <div class="row">
            <a href="{{ route('themes.show', $theme->id) }}">{{ $theme->name }}</a>
        </div>
    @empty
        <h1>Aucun Thème</h1>
    @endforelse
@endsection
