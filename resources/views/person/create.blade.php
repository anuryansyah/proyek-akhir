@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
    @endif

    <div class="card my-3">
      <div class="card-header">
        Form Tambah Data
      </div>
      <div class="card-body">
        <form action="{{ route('person.store') }}" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Masukan Nama Anda" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Masukan Email Anda" class="form-control">
          </div>
          <div class="form-group mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
@endsection
