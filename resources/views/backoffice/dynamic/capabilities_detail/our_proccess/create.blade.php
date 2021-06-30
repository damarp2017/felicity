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


@endpush

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Our Process</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting') }}">Create Our Process</a></li>
                        {{-- <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting.edit') }}">Edit</a>
                        </li> --}}
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
				@include('backoffice.dynamic.capabilities_detail._sidebar')
			</div>
			<div class="col-md-9">
				<div class="card ">
					<div class="card-header">
						<h3 class="card-title">Create Our Process</h3>
					</div>
					<form action="{{ route('backoffice.dynamic.our.process.create', $capabilityId) }}" method="post">
						@csrf
						<div class="card-body">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" required
									placeholder="Enter Title" value="{{ old('title') }}">
							</div>
							<div class="form-group">
								<label for="title">Subtitle</label>
								<input type="text" class="form-control" id="subtitle" name="subtitle" required
									placeholder="Enter Subtitle" value="{{ old('subtitle') }}">
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-success">Create</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		
        
    </section>
</div>
@endsection
