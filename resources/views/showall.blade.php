@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Beranda')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
		<div class="col-md-10">
			<div class="card card-chart">
				<div class="card-header card-header-success">
						<img src="{{asset($poster->filename)}}" alt="" width="800" height="450">
							</div>
					<div class="card-body">
						<h4 class="card-title">{{$poster->title}}</h4>
					</div>
				</div>
			</div>
      </div>			
	</div>
</div>
@endsection