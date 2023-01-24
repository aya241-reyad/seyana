@extends('layouts/app')
@section('content')
<form action="{{url('options/'.$option->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">Title</label>
          <input type="text" class="form-control" value="{{$option->title}}" name="title">
          <input type="hidden" id="id" name="id" value="{{$option->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('title') }}</div>


        <div class="mb-3">
            <label  class="form-label">Price</label>
              <input type="number" class="form-control" value="{{$option->price}}" name="price">
            </div>
            <div class="alert-danger">{{ $errors->first('price') }}</div>
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">Edit</button>
</form>
@endsection