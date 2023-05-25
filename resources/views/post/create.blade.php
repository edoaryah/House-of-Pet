@extends('layouts.main')

@section('container')

    <div class="mt-2 ms-5 container row justify-content-center">
        <h2 class="ms-5 font-bold  text-center mb-3">Buat Pertanyaan Anda</h2>
        <div class="ms-5 border py-3 rounded-5 shadow col-md-15" >
            <form action="/post" method="POST" class="mb-3 px-5">
                @csrf
                <div class="mb-3 col-md-6 ">
                    <div class="mb-3 fw-semibold"><label for="author" class="">Author</label></div>
                    <input type="text" name="author" placeholder="Isi Nama anda" class="shadow-sm form-control py-2 px-3 form-text border rounded" value='{{ old('author') }}'  required >
                </div>
                <div class="mb-3 col-md-6 ">
                    <div class="mb-3 fw-semibold"><label for="title" class="">Title</label></div>
                    <input type="text" name="title" placeholder="Isi inti dari pertanyaan anda" class="shadow-sm form-control mt-1 py-2 px-3 border form-text rounded" value='{{ old('title') }}' required >
                </div>
                <div class="mb-3 col-md-6 ">
                    <div class="mb-3 fw-semibold"><label for="text" class="mt-6  font-medium  ">Text</label></div>
                    <textarea name="text" placeholder="Isi Detail Pertanyaan anda" class="shadow-sm form-control mt-1 py-2 px-3 border form-text rounded" required >{{ old('text') }}</textarea>
                </div>
                @if($errors->any())
                    <div class="mt-6">
                        <ul class="px-4 py-1 rounded bg-danger d-inline-block text-white">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                        @endif
                    <button type="submit" class="btn btn-primary mt-6 py-2 px-4 w-full border border-transparent  font-medium focus:outline-none">Post</button>
            </form>
        </div>
    </div>
@endsection