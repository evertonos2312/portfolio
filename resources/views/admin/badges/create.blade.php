@extends('layouts.admin.admin')
@section('header')
    <header class="bg-white shadow">
        <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">{{$title}}</h1>
        </div>
    </header>
@endsection
@section('content')
    <div class="bg-white p-6 rounded shadow mt-4">
        <div class="mt-4">
            <form action="{{route('badges.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <label class="block">
                        <span class="text-gray-700">Nome</span>
                        <input name="name"
                            class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                            type="text">
                    </label>
                    <label class="block">
                        <span class="">Imagem</span>
                        <input  name="icon" accept="image/*" type="file" class="block w-full text-sm text-slate-500
                              file:mr-4 file:mt-2 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-violet-50 file:text-violet-700
                              hover:file:bg-violet-100
                            "/>
                    </label>
                    <div class="flex justify-center space-x-2">
                        <button
                            type="submit"
                            class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @livewire('admin.badge-show')
@endsection
