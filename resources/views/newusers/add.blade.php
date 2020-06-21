@extends('layouts.app')
@section('title','Dodawanie uzytkownika - Fallwork')
@section('content')
<div class="row">
    <div class="col-2"></div>
    <div class="col-6">
    <h2>Dodaj osobę do bazy danych</h2><br /> 
        <form action="{{route('newusers.save')}}" method="post">
            <input name="_token" type="hidden" value="{{csrf_token()}}">
                <div class="form-group">
                @if(isset($success))
                <div class="alert alert-success"> {{$success}}</div>
                @endif
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Podaj imię">
                    @if( $errors->has('name'))
                        <span class="error text-danger">{{ $errors->first('name') }}</span>   
                    @endif             
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="surname" value="{{old('surname')}}" placeholder="Podaj nazwisko">
                    @if( $errors->has('surname'))
                        <span class="error text-danger">{{ $errors->first('surname') }}</span>   
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary float-right" type="submit">Wyślij</button><br /><br />
                </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>
@endsection
