@extends('layouts.app')
@section('content')

<section class="content">


    <form action="{{ route('quests.store')}}" method="post">
        @csrf
        
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input type="text" class="form-control"  name="title">
    </div>
    <div class="alert-danger">{{ $errors->first('title') }}</div>

    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" class="form-control"  name="description">
      </div>
      <div class="alert-danger">{{ $errors->first('description') }}</div>
    
    
    
    
    
    <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">add</button>
    </form>














    
    @endsection