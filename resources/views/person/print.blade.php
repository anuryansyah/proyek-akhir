@extends('layouts.main')

@section('content')
    <div class="card my-2">
      <div class="card-header">
        Data person
      </div>
      <div class="card-body">
        <p>Nama Anda {{ $person->name }}</p>
        <p>Email Anda {{ $person->email }}</p>
      </div>
    </div>
@endsection