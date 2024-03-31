@extends('layouts.plantilla')

@section('title', 'Categories create')

@section('content')
    <div class="h-screen bg-gradient-to-r from-purple-900 to-blue-900 flex items-center justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-10 rounded-lg shadow-2xl">
                <div class="text-2xl font-semibold text-center text-gray-800">{{ __('New Category:') }}</div>

                <div class="mt-8">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="name" class="block font-medium text-gray-700">{{ __('Name:') }}</label>

                            <input id="name" type="text" class="form-input mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <span class="text-red-500 font-bold text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
