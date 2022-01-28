@extends('master')

@section('content')

@error('name')
    <span class="bg-red-800 text-white">{{ $message }}</span>
@enderror

<h1>Atualizar dados:</h1>
<form action="{{route('breed.put', ['id' => $breed->id])}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome: </label>
    <input type="text" class="ml-2 border-2" id="name" name="name" value="{{ old('name') ?? $breed->name }}">
    <input type="submit" value="Atualizar">
</form>

@endsection
