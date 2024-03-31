@extends('layouts.plantilla')

@section('title', 'Category.edit')

@section('content')
    <div class="bg-gradient-to-b from-purple-900 to-purple-500 h-screen">
        <div class="flex justify-center py-20">
            <div class="p-4 border-2 rounded-lg border-yellow-700">
                <div class="bg-gradient-to-b from-white to-indigo-600 p-10 rounded-lg shadow-lg border-collapse">
                    <div class="card">
                        <div class="card-header text-purple-900 text-2xl font-bold text-center">Edit Category:</div>
                        <div class="card-body p-2">
                            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row p-2">
                                    <label for="name" class="text-gray-700 font-bold">Name:</label>

                                    <div class="p-2">
                                        <input id="name" type="text" class="form-control border-2 rounded-lg border-gray-700 @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name) }}" required autofocus>

                                        @error('name')
                                            <span class="invalid-feedback text-red-600" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2 text-center">
                                        <button type="submit" class="mt-5 px-5 py-2 rounded-lg bg-gray-200 text-gray-700 font-semibold hover:bg-blue-400 hover:text-white border-2 border-transparent hover:border-red-900 transition duration-300 ease-in-out">
                                            Update Category
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
