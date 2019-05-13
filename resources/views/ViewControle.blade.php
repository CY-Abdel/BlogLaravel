@extends('layouts.main')

@section('content')
<p class="p1 ">Panneau de controle</p>
@endsection

@section('panneau_cntr')
<div class=" small-up-3 medium-up-3 large-up-3 container ">
<div style="background-color: rgb(48, 61, 59); border-radius:10px;" class="small-up-3 medium-up-3 large-up-3 container  text-center" >
    <h1 style="color :white;" >gérez les droits</h1>
</div>
<div>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Utilisateur</th>
        <th>Administrateur</th>
        <th>Supprimer</th>
    </tr>
    @foreach($users as $user)
    <form action="/gererUser" method="post">
        {{ csrf_field() }} 
        <input type="hidden" name="id" value="{{ $user->id }}">
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><input type="checkbox" onChange="this.form.submit()" name="role-user" {{ $user->hasRole('User') ? 'checked' : ' ' }}></td>
            <td><input type="checkbox" onChange="this.form.submit()" name="role-admin" {{ $user->hasRole('Admin') ? 'checked' : ' ' }}></td>
            <td><button type="submit" class="btn btn-danger" name="supprimer" value="supprimer">Supprimer</button></td>
        </tr>
    </form>
    @endforeach
</table>
</div>
</div>
@endsection


