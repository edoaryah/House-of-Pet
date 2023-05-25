@extends('layouts.main')

@section('container')
<section>
    <div class="">
        <div class="text-center">
            <h1 class="">House of Pet Community Support</h1>
        </div>
        {{-- Posts Wrapper --}}
        <div class="">
                <div class="container">
                    <div class="py-3 ">
                        <a href="/post/new" class="py-1 px-2 border border-2 border-black bg-success  rounded-2  shadow-lg overflow-hidden text-body text-decoration-none link-black" style="-webkit-text-fill-color: white">Buat Baru</a>
                    </div>
                    @foreach ($post as $post)
                    {{-- Post --}}

                    <div class="border border-2 border-black rounded-2  shadow-lg overflow-hidden " style="margin-bottom: 60px">
                        {{-- Content --}}
                        <div class="ms-3">
                            <div class="">
                                <a href="/post/{{ $post->id }}" class="text-body text-decoration-none link-black">
                                    <h3 class="mt-2 fw-bolder">{{ $post->title }}</h3>
                                </a>
                                <p class="mt-3">
                                    @if (strlen($post->text) > 200)
                                        {{ substr($post->text, 0, 200) }}...
                                    @else
                                        {{ $post->text }}
                                    @endif
                                </p>
                            </div>
                            <div class="mt-6 flex items-center">
                                {{-- Bagian Bawah --}}
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium ">User : {{ $post->user }}</p>
                                    <div class="flex text-sm leading-5 text-gray-500">
                                        <time datetime="{{ $post->created_at }}">
                                            {{ $post->created_at}}
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</section>
@endsection