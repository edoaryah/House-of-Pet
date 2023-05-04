@extends('layouts.navigation')

@section('content')

<!-- {{-- nama : {{ Auth::user()->name }}
    id : {{ $id = Auth::user()->id }} --}} -->

<div class="antrian">
  <section class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nomer Antrian</th>
          <th scope="col">Nama</th>
          <th scope="col">Status Antrian</th>
          <th scope="col">Hari Datang</th>
          @if (auth())
          @else if (auth()->user()->level=="admin")
          <th scope="col">Edit</th>
          @endif
        </tr>

      </thead>
      <form action="/antrian" method="POST">
        @csrf
        <div class="form-group  col-sm-4">
          <div class="input-group date">
            <label for="date" class="col-form-label">Pilih Hari : </label>
            <input type="date" class="form-control" id="date" name="date">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
          </div>

        </div>

      </form>
      @foreach ($dataAntrian as $an)
      {{-- @dd($dataAntrian) --}}
      <tbody>
        <tr>
          <th>{{ $an->nomor_antrian }}</th>
          <td>{{ $an->name }}</td>
          <td>{{ $an->status_antrian }}</td>
          <td>{{ $an->tanggal_Pesan ?? 'null'}}</td>

 
          @if (auth()->user()->level=="admin")
          <td>
            <a href="/antrian/{{ $an->nomor_antrian }}/edit" class="btn btn-secondary">UBAH</a>
            <form class="d-inline" action="/antrian/{{ $an->nomor_antrian }}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
          </td>
          @endif
        </tr>
      </tbody>
      @endforeach
    </table>
</div>


@endsection