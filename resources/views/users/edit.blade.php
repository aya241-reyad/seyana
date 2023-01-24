@extends('layouts/app')
@section('page_title')

Edit Admin

@endsection
@section('content')
<form action="{{url('users/'.$user->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">Name</label>
          <input type="text" class="form-control" value="{{$user->name}}" name="name">
          <input type="hidden" id="id" name="id" value="{{$user->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('name') }}</div>
        <div class="form-group mb-5">
            <label for="exampleFormControlTextarea4" class="">email</label>
            <input type="email" class="form-control" value="{{$user->email}}" name="email">
          </div>
          <div class="alert-danger">{{ $errors->first('email') }}</div>
          
        <br/>
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">edit</button>
</form>
@endsection
