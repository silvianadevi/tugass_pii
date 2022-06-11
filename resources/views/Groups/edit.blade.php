@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups/{{ $group['id'] }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $group['name'] }}">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="alamat" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') ? old('description') : $group['description'] }}">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection 