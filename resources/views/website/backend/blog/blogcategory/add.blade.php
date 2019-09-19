@extends('website.backend.layouts.main')

@section('content')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> Add Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form role="form" action="{{route('blogcategory.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="box-body">


            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
            </div>
            <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Enter ..." autocomplete="off" spellcheck="false"></textarea>
                  </div>






            <div class="form-group">
              <label for="image">File input</label>
              <input type="file" id="image" name="image">


            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


@endsection
