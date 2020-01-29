@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Beranda')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
      	@foreach($poster as $posters)
			<div class="col-md-6">
				<div class="card card-chart">
					<div class="card-header card-header-success">
						<a href="/show/{{$posters->id}}"><img src="{{$posters->filename}}" alt="" width="450" height="300"></a>
					</div>
					<div class="card-body">
						<h4 class="card-title">{{$posters->title}}</h4>
					</div>
				</div>
			</div>
		@endforeach
      </div>			
	</div>
</div>
@endsection