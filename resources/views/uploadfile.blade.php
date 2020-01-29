@extends('layouts.app', ['activePage' => 'uploadfile', 'titlePage' => __('Halaman Upload')])
	
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
			<form method="post" action="/uploadfile" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card ">
		             <div class="card-header card-header-primary">
		               <h4 class="card-title">{{ __('Upload Gambar') }}</h4>
		               <p class="card-category">{{ __('Image information') }}</p>
		             </div>
		              <div class="card-body ">
		              	<div class="row">
		              		<label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                  			<div class="col-sm-7">
				        	  <input class="form-control" type="text" name="title" value="" /> <br>
				        	</div>
				        </div>
				        <div class="row">
		              		<label class="col-sm-2 col-form-label">{{ __('File') }}</label>
                  			<div class="col-sm-7">
				        	  <input type="file" name="filename" value="" /> <br>
				        	</div>
				        </div>
				       </div>
				       <div class="card-footer ml-auto mr-auto">
                			<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              		   </div>	            
				</div>
			</form>
		</div>
	  </div>
	</div>
  </div>
@endsection