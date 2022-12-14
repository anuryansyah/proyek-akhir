@extends('layouts.main')

@section('content')
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr class="table-light">
          <th scope="col">No</th>
          <th scope="col">NRP</th>
          <th scope="col">Nama</th>
          <th scope="col">JenisKelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Tempat Lahir</th>
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
          </tr>            
        @endforeach
      </tbody>
    </table>
  </div>
@endsection