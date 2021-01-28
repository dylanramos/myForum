@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Utilisateurs</h1>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Rôle</th>
              </tr>
            </thead>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->pseudo }}</td>
                <td>{{ $user->role->name }}</td>
                <td>
                    @if ($adminsNumber < 5 && $user->role->slug != 'ADMI')
                        <a href="{{ route('addadmin', $user->id) }}" class="btn">Nommer admin</a>
                    @elseif ($user->role->slug == 'ADMI')
                        <a href="" class="btn">Déstituer</a>
                    @endif
                </td>
            </tr>
        
        @empty
        <h1>Aucun utilisateur</h1>
        @endforelse
        </table>
    </div>
@endsection