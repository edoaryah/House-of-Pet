@extends('layouts.main')

@section('container')
<div class="bg-gray-50 h-full md:grid md:grid-cols-12">
    <div class="py-16 px-4 md:px-0 md:col-start-4 md:col-span-6">
        <h2 class="text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">New Post</h2>
        <div class="bg-white shadow-sm mt-5 p-6 rounded-md">
            <form action="/post" method="POST" class="mb-0">
                @csrf
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" value={{ old('title') }} autofocus required>

                <label for="text" class="mt-6 block text-sm font-medium text-gray-700">Text</label>
                <textarea name="text" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" required>{{ old('text') }}</textarea>

                @if($errors->any())
                    <div class="mt-6">
                        <ul class="bg-red-100 px-4 py-5 rounded-md">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="mt-6 py-2 px-4 w-full border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Post</button>
            </form>
        </div>
    </div>
</div>
@endsection