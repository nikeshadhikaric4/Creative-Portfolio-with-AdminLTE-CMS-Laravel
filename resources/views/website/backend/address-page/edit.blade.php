@extends('website.backend.layouts.main')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"> Edit Contact Page Components</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
<form role="form" action="{{route('addresspage.update', $editCategory->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')

      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">phone</label>
        <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="{{$editCategory->phone}}">
        </div>
        <div class="form-group">
                <label>address</label>
        <textarea name="description" class="form-control" rows="3"  autocomplete="off" spellcheck="false" value="{{$editCategory->address}}"> {{$editCategory->address}}</textarea>
              </div>

              <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Link" value="{{$editCategory->email}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">website link</label>
                  <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Enter Link" value="{{$editCategory->website}}">
                  </div>





        </div>

      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


@endsection
