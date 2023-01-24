@extends('layouts.app')
@section('content')

<section class="content">


    <form action="{{ route('options.store')}}" method="post">
        @csrf
        
    <div class="mb-3">
      <label  class="form-label">title</label>
      <input type="text" class="form-control"  name="title">
    </div>
    <div class="alert-danger">{{ $errors->first('title') }}</div>

    <div class="mb-3">
        <label  class="form-label">price</label>
        <input type="number" class="form-control"  name="price">
      </div>
      <div class="alert-danger">{{ $errors->first('price') }}</div>
    
    
    
    
    
    <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">add</button>
    </form>














    
    @endsection