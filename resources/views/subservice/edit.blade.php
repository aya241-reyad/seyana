@extends('layouts/app')
@section('content')
<form action="{{url('subservices/'.$sub->id)}} " method="post">
    @csrf
    @method('Patch')


    <div class="mb-3">
        <label  class="form-label">title</label>
          <input type="text" class="form-control" value="{{$sub->title}}" name="title">
          <input type="hidden" id="id" name="id" value="{{$sub->id}}">
        </div>
        <div class="alert-danger">{{ $errors->first('title') }}</div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea4" class="">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea4"  name="description" rows="3">{{$sub->description}}</textarea>
          </div>
          <div class="alert-danger">{{ $errors->first('description') }}</div>
          <div class="mb-3">
            <label  class="form-label">price</label>
              <input type="number" class="form-control" value="{{$sub->price}}" name="price">
            </div>
            <div class="alert-danger">{{ $errors->first('price') }}</div>
          <div class="mb-3">
            <label for="defaultSelect" class="form-label">service</label>
            <div class="form-group">
                <select class="form-control" name="service_id" aria-label="Default select example">
                    <option value="">select service</option>
                    @foreach ($services as $service)
                        <option value={{ $service->id }}>{{ $service->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="alert-danger">{{ $errors->first('service_id') }}</div>
        <br/> 
        <button type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" class="btn btn-primary">edit</button>
</form>
@endsection
