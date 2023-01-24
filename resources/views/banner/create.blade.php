@extends('layouts.app')
@section('content')
 <form action="{{ route('createbanner')}}" method="post">
        @csrf
        
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input type="text" class="form-control"  name="title">
    </div>
    <div class="alert-danger">{{ $errors->first('title') }}</div>



    <div class="mb-3">
        <label  class="form-label">Image</label>
        <input type="text" class="form-control"  name="img">
      </div>
      <div class="alert-danger">{{ $errors->first('img') }}</div>
    
    
    
    
    
    <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">add</button>
    </form>

@endsection