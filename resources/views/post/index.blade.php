@extends('layouts.main')

@section('container')
    <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl leading-10 tracking-tight font-bold text-gray-900">Welcome to community</h2>
            <p class="max-w-2xl mx-auto mt-5 text-xl leading-7 text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem tenetur expedita debitis veritatis aut ea quae itaque beatae delectus corrupti aspernatur, odio nesciunt possimus excepturi, necessitatibus et adipisci, minus deleniti!</p>
        </div>
    
        {{-- Posts Wrapper --}}
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            
                <section class="container">
                    @foreach ($post as $post)
                    {{-- Post --}}
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden " style="margin-bottom: 60px">
                        {{-- Contet --}}
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="/posts/{{ $post->id }}">
                                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                                </a>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    @if (strlen($post->text) > 200)
                                        {{ substr($post->text, 0, 200) }}...
                                    @else
                                        {{ $post->text }}
                                    @endif
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1194113737092935681/63O1znGw.jpg" alt="author avatar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium text-gray-900">John Doe</p>
                                    <div class="flex text-sm leading-5 text-gray-500">
                                        <time datetime="{{ $post->created_at }}">
                                            {{ $post->created_at->diffForHumans() }}
                                        </time>
                                        <span class="mx-1">&middot;</span>
                                        <span>{{ ceil(strlen($post->text) / 863) }} min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
            
        </div>
    </div>
@endsection