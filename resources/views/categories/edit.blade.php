@extends('layouts/app')
@section('content')
<form action="{{url('categories/'.$category->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">Name</label>
          <input type="text" class="form-control" value="{{$category->name}}" name="name">
          <input type="hidden" id="id" name="id" value="{{$category->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('name') }}</div>
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">Edit</button>
</form>
@endsection
