@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register')}}" method="POST" class="flex-col justify-center">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Nome</label>
            <input type="text" name="name" id="name" placeholder="Nome" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name')}}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Nome de Usuário</label>
                <input type="text" name="username" id="username" placeholder="Usuário" autocomplete="off" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username')}}">
                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="E-mail" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email')}}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Senha</label>
                <input type="password" name="password" id="password" placeholder="Senha" autocomplete="off" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only"> Confirmar Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Senha" autocomplete="off" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registrar</button>
            </div>
        </form>
    </div>
</div>

@endsection
