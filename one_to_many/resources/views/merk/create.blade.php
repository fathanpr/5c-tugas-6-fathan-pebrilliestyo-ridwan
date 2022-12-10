@extends('layouts.app');
@section('title','Input Merk Gudangku')
@section('content')
<h1>Merk Baru</h1>
<form action="{{ route('merks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Merk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <button type="submit" class="btn btn-primary">INPUT MERK BARU</button>
  </form>
@endsection