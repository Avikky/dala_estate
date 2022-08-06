@extends('layouts.userpage')
@section('pageTitle', 'All Posts')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        
        <div class="col-md-12">
          <div class="box-header">
            <h3 class="box-title">All post</h3>
          </div><!-- /.box-header -->

          <div class="box">
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Tags</th>
                        <th>Date Published</th>
                        <th>Action</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                  <tbody>

                  @forelse($posts as $post)
                    <tr>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->category }}</td>
                      <td>{{ $post->tag }}</td>
                      <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->toFormattedDateString() }}<br>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</td>
                      <td>
                        <a target="_blank" class="btn btn-primary btn-sm" href="">View</a> 
                        <a href="{{ url('admin/editpost') }}/?slug={{ $post->slug}}"><i class="fa fa-edit btn btn-info btn-sm">Edit</i></a></td>
                      <td>
                        <form action="{{ url('/admin/deletepost') }}/{{$post->id}}" method="POST">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @empty
                  @endforelse
                </table>
              </div>
            </div>
          </div><!-- /.box -->
        </div>
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
