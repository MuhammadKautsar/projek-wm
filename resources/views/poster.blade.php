@extends('layouts.app', ['activePage' => 'poster', 'titlePage' => __('Poster List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Poster Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="row">
                  <div class="col-12 text-right">
                    <a href="/uploadfile" class="btn btn-sm btn-primary">{{ __('Add poster') }}</a>
                  </div>
                </div>
            <div class="table-responsive">
              <table class="table">
				<thead class=" text-primary">
					<th> ID </th>
					<th> Title </th>
					<th> Filename </th>
					<th> Image </th>
					<th> Action </th>
				</thead>
				<tbody>
					@foreach($poster as $posters)
					<tr>
						<th>{{$posters->id}}</th>
						<th>{{$posters->title}}</th>
						<th>{{$posters->filename}}</th>
						<th><img src="{{$posters->filename}}" alt="" width="100" height="100"></th>
						<th>
							<a href="/editimage/{{$posters->id}}" class="btn btn-success"> EDIT </a>
							<a href="/deleteimage/{{$posters->id}}" class="btn btn-danger"> DELETE </a>
						</th>
					</tr>
					@endforeach
				</tbody>
			  </table>
			</div>
		  </div>
	    </div>
	  </div>
    </div>
  </div>
</div>
@endsection
