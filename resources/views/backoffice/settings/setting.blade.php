@extends('backoffice.layout.app')

@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/toastr/toastr.min.css') }}">
@endpush

@push('scripts')
<!-- Toastr -->
<script src="{{ asset('assets/adminlte/plugins/toastr/toastr.min.js') }}"></script>

@if ($message = Session::get('success'))
<script>
    message = {!! json_encode($message) !!}
    $(function() {
        toastr.success(message);
    });
</script>
@endif

<script>
	function previewImage(input) {  
		if (input.files && input.files[0]) {
			$('.preview-image').css('display', '')
			$('.preview-image').attr("src", URL.createObjectURL(event.target.files[0]));
			$('.preview-image').on('load', function () {  
				URL.revokeObjectURL($('.preview-image').attr("src"))
			})
		}
	}
</script>

@endpush

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting') }}">Setting</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting.edit') }}">Edit</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
		@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		<div class="d-flex">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-site-tab" data-toggle="pill" href="#v-pills-site" role="tab" aria-controls="v-pills-site" aria-selected="true">
								Site Information
							</a>
							<a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">
								Contact Information
							</a>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-site" role="tabpanel" aria-labelledby="v-pills-site-tab">
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title">Site Information</h3>
							</div>
							<form action="{{ route('backoffice.setting.update.site') }}" method="post"
							enctype="multipart/form-data">
								@method('put')
								@csrf
								<div class="card-body">
									<div class="form-group">
										<label for="link">link</label>
										<input type="text" class="form-control" id="link" name="link" required
											placeholder="Enter link" value="{{ old('link') ?? ($data ? $data->link : '') }}">
									</div>
									<div class="form-group">
										<label for="favicon">favicon</label>
										<input type="file" class="form-control" id="favicon" name="favicon" required
										onchange="previewImage(this)" accept="image/*">
										<img src="{{ $data->favicon ? asset($data->favicon) : '' }}" class="mt-2 preview-image" alt="" width="100" height="100"
										style="object-fit: cover; object-position: center; display: {{ $data->favicon ? '' : 'none' }}">
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title">Contact Information</h3>
							</div>
							<form action="{{ route('backoffice.setting.update.contact') }}" method="post">
								@method('put')
								@csrf
								<div class="card-body">
									<div class="form-group">
										<label for="company_name">Company Name</label>
										<input type="text" class="form-control" id="company_name" name="company_name" required
											placeholder="Enter Company Name" value="{{ old('company_name') ?? ($data ? $data->company_name : '') }}">
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">email</label>
												<input type="text" class="form-control" id="email" name="email" required
													placeholder="Enter email" value="{{ old('email') ?? ($data ? $data->email : '') }}">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="youtube">youtube</label>
												<input type="text" class="form-control" id="youtube" name="youtube" required
													placeholder="Enter youtube" value="{{ old('youtube') ?? ($data ? $data->youtube : '') }}">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="facebook">facebook</label>
												<input type="text" class="form-control" id="facebook" name="facebook" required
													placeholder="Enter facebook" value="{{ old('facebook') ?? ($data ? $data->facebook : '') }}">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="twitter">twitter</label>
												<input type="text" class="form-control" id="twitter" name="twitter" required
													placeholder="Enter twitter" value="{{ old('twitter') ?? ($data ? $data->twitter : '') }}">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="instagram">instagram</label>
												<input type="text" class="form-control" id="instagram" name="instagram" required
													placeholder="Enter instagram" value="{{ old('instagram') ?? ($data ? $data->instagram : '') }}">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="linkedin">linkedin</label>
												<input type="text" class="form-control" id="linkedin" name="linkedin" required
													placeholder="Enter linkedin" value="{{ old('linkedin') ?? ($data ? $data->linkedin : '') }}">
											</div>
										</div>
									</div>
									
									
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
        
    </section>
</div>
@endsection
