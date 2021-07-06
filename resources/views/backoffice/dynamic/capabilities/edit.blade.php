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
                    <h1>Edit Capability : {{ $capability->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Capability : {{ $capability->title }}</h3>
                </div>
                <form action="{{ route('backoffice.dynamic.capablities.edit', $capability->id) }}" method="post"
				enctype="multipart/form-data">
                    @csrf
					@method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required
                                placeholder="Enter Title" value="{{ old('title') ?? $capability->title }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" required
                                placeholder="Enter Subtitle" value="{{ old('subtitle') ?? $capability->subtitle }}">
                        </div>

						<div class="form-group">
                            <label for="text_button">Text Button</label>
                            <input type="text" class="form-control" id="text_button" name="text_button" required
                                placeholder="Enter Text Button" value="{{ old('text_button') ?? $capability->text_button }}">
                        </div>

						<div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image"
							onchange="previewImage(this)" accept="image/*">
							<img src="{{ $capability->image ? Storage::url($capability->image) : '' }}" class="mt-2 preview-image" alt="" width="100" height="100"
							style="object-fit: cover; object-position: center; display: {{ $capability->image ? '' : 'none' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection