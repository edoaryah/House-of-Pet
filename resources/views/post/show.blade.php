@extends('layouts.main')

@section('container')
<div class="">
    <div class="container shadow border mt-3 rounded mb-3">
        <div class="mt-4 px-3 py-1 border shadow-sm rounded">
            <div class="d-flex justify-content-between">
                <a href="/forum" class="shadow" style="-webkit-text-fill-color: white">
                    <div class="border py-2 bg-primary fw-bold btn">Back</div>
                </a>
                <div class="">
                    <div class="">
                        <p class="">User : {{ $post->author }}</p>
                    </div>
            </div>
            </div>
            <div class="text-sm  text-gray-500">Post Create : 
                <time datetime="{{ $post->created_at }}">
                        {{ $post->created_at}}
                </time>
            </div>
                <h2 class=" text-center">{{ $post->title }}</h2>
                <p class="mt-5">Pertanyaan : {{ $post->text }}</p>
            </div>
    
            <h2 class="mt-5 text-center">Comments</h2>
            @auth
            @if (auth()->user()->level=="admin")
            <div>
                <form action="/post/{{ $post->id }}/comments" method="POST" class="mb-0">
                    @csrf
                    @auth
                    @if(auth()->user()->level=="user" || auth()->user()->level=="admin")
                    <div class="mb-1 col-md-6">
                        <div class="mb-1"><label for="author" class="">Author</label></div>
                        <input type="text" name="author" readonly class="form-control mt-1 py-2 px-3  border  rounded shadow-sm" placeholder="Isi nama anda" value="{{ Auth::user()->name}}" required>
                    </div>
                    @endauth
                    @else
                    <div class="mb-1 col-md-6">
                        <div class="mb-1"><label for="author" class="">Author</label></div>
                        <input type="text" name="author" class="form-control mt-1 py-2 px-3  border  rounded shadow-sm" placeholder="Isi nama anda" value="{{ old('author')}}" required>
                    </div>
                    @endif
                    <div class="mb-3 col-md-6">
                        <div class="mb-1"><label for="author" class="mt-6 ">Text</label></div>
                        <textarea name="text" class="form-control mt-1 py-2 px-3 border rounded shadow-sm" placeholder="isi nama anda" required>{{ old('text') }}</textarea>
                    </div>
    
                    @if ($errors->any())
                        <div class="mt-1">
                            <ul class=" px-4 py-5 roundend">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <button type="submit" class="mb-3 btn btn-primary mt-6 py-2 px-4 w-full border border-transparent  font-medium focus:outline-none">Post</button>
                </form>
            </div>
            @endif
            @endauth
            
            {{-- komentar --}}
            <div class="mt-6">
                @foreach ($comments as $comment)
                    <div class="border mb-5  px-4 py-6 rounded shadow-sm">
                        <div class="flex">
                            {{-- Avatar --}}
    
                            <div class="flex flex-col d-flex justify-content-between">
                                <p class="mr-1 font-bold">User : {{ $comment->author }}</p>
                                <p class="">Comment Create : {{ $comment->created_at}}</p>
                            </div>
                        </div>
    
                        <div class="mt-3">
                            <p>{{ $comment->text }}</p>
                        </div>
                        @auth
                        @if(auth()->user()->level=="user" || auth()->user()->level==null)
                        
                        @elseif(auth()->user()->level=="admin") 
                        <form action="/comments/{{ $comment->id }}" method="POST" class="mb-2 mt-3 rounded">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm py-1 px-2 border border-gray-400 shadow-sm rounded-md hover:shadow-md">Delete</button>
                        </form>
                        @endif
                        @endauth

                    </div>
                @endforeach
    
                {{ $comments->links() }}
            </div>
    
        </div>
    </div>
</div>
  @endsection