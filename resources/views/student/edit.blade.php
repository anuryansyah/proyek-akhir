@extends('layouts.main')

@section('content')
  <div class="container">
    <h1 class="mb-3">Edit Mahasiswa</h1>
    <form method="POST" action="/student/{{ $student->id }}" class="w-50">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="code" class="form-label">Masukan NRP</label>
        <input name="code" type="text" class="form-control" id="code" value="{{ $student->code }}">
        @error('code')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Masukan Nama</label>
        <input name="name" type="text" class="form-control" id="name" value="{{ $student->name }}">
        @error('name')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label w-100">Masukan Gender</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="P" {{ ($student->gender=="P")? "checked" : "" }}>
          <label class="form-check-label" for="inlineRadio1">Pria</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="W" {{ ($student->gender=="W")? "checked" : "" }}>
          <label class="form-check-label" for="inlineRadio2">Wanita</label>
        </div>
        @error('gender')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="birth_date" class="form-label">Masukan Tanggal Lahir</label>
        <input name="birth_date" type="date" class="form-control" id="name" value="{{ $student->birth_date }}">
        @error('birth_date')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="birth_place" class="form-label">Masukan Tempat Lahir</label>
        <input name="birth_place" type="text" class="form-control" id="birth_place" value="{{ $student->birth_place }}">
        @error('birth_place')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection