@extends('layouts.userpage')
@section('pageTitle', 'All Events')
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
                        <th>Venue</th>
                        <th>Date of Event</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                  <tbody>

                  @forelse($events as $event)
                    <tr>
                      <td>
                        {{ $event->title }} <br>
                        <a target="_blank" class="btn btn-primary btn-sm" href="">View</a> <a href="{{ url('editevent') }}/{{ $event->id }}"><i class="fa fa-edit btn btn-info btn-sm">Edit</i></a>
                      </td>
                      <td>{{ $event->venue }}</td>
                      <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }}<br>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->diffForHumans() }}</td>
                      <td>
                        <form action="{{ url('/admin/deleteevent') }}/{{$event->id}}" method="POST">
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
