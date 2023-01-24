@extends('layouts/app')
@section('content')
<form action="{{url('units/'.$unit->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">Name</label>
          <input type="text" class="form-control" value="{{$unit->name}}" name="name">
          <input type="hidden" id="id" name="id" value="{{$unit->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('name') }}</div>


        <div class="mb-3">
            <label  class="form-label">Price</label>
              <input type="number" class="form-control" value="{{$unit->price}}" name="price">
            </div>
            <div class="alert-danger">{{ $errors->first('name') }}</div>
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">Edit</button>
</form>
@endsection