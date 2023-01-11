@extends('layouts.main')

@section('content')
  <div class="container">
    <h1 class="mb-3">Data Mahasiswa</h1>

    @if (session()->get('success'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
      </div>
    @endif

    <a href="{{ route('student.create') }}" class="btn btn-success my-3">Tambah Data</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NRP</th>
          <th scope="col">Nama</th>
          <th scope="col">JenisKelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $student->code }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->gender == 'P' ? 'Pria' : 'Wanita' }}</td>
            <td>{{ $student->birth_date }}</td>
            <td>{{ $student->birth_place }}</td>
            <td class="text-center">
              <a href="/student/{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
            </td>
            <td class="text-center">
              <form action="/student/{{ $student->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>            
        @endforeach
      </tbody>
    </table>
  </div>
@endsection