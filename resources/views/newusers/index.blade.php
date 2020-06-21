@extends('layouts.app')
@section('title','Baza użytkowników - Fallwork')
@section('content')
<table class="table">
    <h2>Baza dodanych użytkowników</h2><br />
    @foreach($user as $user)
        <tr> 
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
        </tr>
    @endforeach
</table>
@endsection