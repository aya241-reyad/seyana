@extends('layouts/app')
@section('content')
<form action="{{url('services/'.$service->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">title</label>
          <input type="text" class="form-control" value="{{$service->title}}" name="title">
          <input type="hidden" id="id" name="id" value="{{$service->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('title') }}</div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea4" class="">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea4"  name="description" rows="3">{{$service->description}}</textarea>
          </div>
          <div class="alert-danger">{{ $errors->first('description') }}</div>
          <div class="mb-3">
            <label for="defaultSelect" class="form-label">category</label>
            <div class="form-group">
                <select class="form-control" name="category_id" aria-label="Default select example">
                    <option value="">select category</option>
                    @foreach ($categories as $category)
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="alert-danger">{{ $errors->first('category_id') }}</div>
        <br/> 
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">edit</button>
</form>
@endsection
