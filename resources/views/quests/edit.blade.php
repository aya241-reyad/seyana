@extends('layouts/app')
@section('content')
<form action="{{url('quests/'.$quest->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">Title</label>
          <input type="text" class="form-control" value="{{$quest->title}}" name="title">
          <input type="hidden" id="id" name="id" value="{{$quest->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('title') }}</div>


        <div class="mb-3">
            <label  class="form-label">Description</label>
              <input type="text" class="form-control" value="{{$quest->description}}" name="description">
            </div>
            <div class="alert-danger">{{ $errors->first('description') }}</div>
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">Edit</button>
</form>
@endsection