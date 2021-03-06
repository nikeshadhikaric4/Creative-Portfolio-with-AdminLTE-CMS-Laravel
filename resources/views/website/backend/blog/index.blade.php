@extends('website.backend.layouts.main')

@section('content')

<div>
<a href="{{route('blog.create')}}" class="btn btn-primary">Add Blog</a>
</div>
<div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body">

          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 217.8px;">SN</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Title</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Category</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">Slug</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Image</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">Description</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 134.8px;">status</th></tr>

            </thead>
            <tbody>
            <tr role="row" class="odd">
                    <?php $i = 1; ?>
            @foreach ($datas as $data)
            <td class="sorting_1">{{$i}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->blog_category}}</td>
            <td>{{$data->slug}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="75" /></td>
            <td>{{Str::limit($data->description, $limit=50, $end = '...')}}</td>
            <td>{{$data->status}}</td>

            <td><a class="btn btn-app" href="{{route('blog.edit', $data->id)}}">
                    <i class="fa fa-edit"></i> Edit
                  </a>
            </td>
        <td><a onclick="return confirm('Are you sure?')" href = "{{route('blog.delete', $data->id)}}"class="btn btn-app bg-maroon">
            <i class="fa fa-remove"></i> Remove
            </a></td>

            </tr>

            @endforeach

            {{-- </tr><tr role="row" class="even">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td> --}}
            </tbody>

          </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
        </div>
        <!-- /.box-body -->
      </div>

@endsection
