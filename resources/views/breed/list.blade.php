
@extends('master')

@section('content')

@if(Session::has('message'))
    <span class="bg-green-800 text-white">{{ Session::get('message') }}</span>
@endif

<form action="{{route('breed.edit')}}" method="post">
    @csrf
    <label for="name">Nome: </label>
    <input type="text" class="ml-2 border-2" id="name" name="name" placeholder="nome...">
    <input type="submit" value="Cadastrar">
</form>

<ul class="p-5">
    @foreach($breeds as $breed)
        <li>
            <div class="flex gap-2">
                <a href="{{ route('breed.show', ['id' => $breed->id]) }}" class="underline text-blue-500">{{ $breed->name }} </a>- nº dog:  {{ $breed->dogs->count() }}
                <form action="{{ route('breed.delete', ['id' => $breed->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="text-white bg-red-500 p-1">X</button>
                </form>
            </div>
            <ul class="pl-5">
                @foreach($breed->dogs as $dog)
                    <li>
                        {{ $dog->name }} de {{ $dog->tutor->name }}
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
@endsection

