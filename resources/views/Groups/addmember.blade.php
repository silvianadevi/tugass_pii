@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form action ="/groups/addmember/{{$group->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-droup">
    <label for="exampleInputEmail1" class="form-label">Nama teman</label>
    <select class="form-select" aria-label="Default select example" name="friend_id">
      <option selected>Pilih teman untuk di masukan ke groups</option>
      @foreach ($friend as $f)
         <option value="{{$f->id}}">{{$f->nama}}</option>
      @endforeach
      
  </select>
  </div>

  <button type="submit" class="btn btn-primary">Tambah ke group</button>
</form>

@endsection