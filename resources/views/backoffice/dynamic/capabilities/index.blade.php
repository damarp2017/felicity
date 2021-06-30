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
	function deleteData(input, e) {
		e.preventDefault()
		const key = input.dataset.key
		$.confirm({
			title: 'Delete Data',
			content: 'are you sure to delete?',
			buttons: {
				delete: {
					text: 'Delete',
					btnClass: 'btn-danger',
					action: function() {
						document.getElementById('form-delete-'+key).submit()				
					}
				},
				cancel: {
					text: 'Cancel',
					btnClass: 'btn-success',
				}
			}
		});
	}

	$(document).on('click', '.btn-image', function (e) {  
		e.preventDefault()
		const img = $(this).data('img')
		$('#preview-img').attr('src', BASE_URL+img)
		$('#modal-image').modal('show')
	})
</script>

@endpush

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Capabilities</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
						<a href="{{ route('backoffice.dynamic.capablities.create') }}" class="btn btn-primary">Create Capability</a>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Capabilities</h3>
                </div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Subtitle</th>
								<th>Text Button</th>
								<th>Link Button</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($capabilities as $capability)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $capability->title }}</td>
									<td>{{ $capability->subtitle }}</td>
									<td>{{ $capability->link_button }}</td>
									<td>{{ $capability->text_button }}</td>
									<td>
										<a href="{{ route('backoffice.dynamic.capabilities.title.subtitle.edit', $capability->id) }}" class="btn btn-outline-primary btn-sm">
											Detail
										</a>
										<a data-img="{{ $capability->image }}" class="btn btn-image btn-outline-primary btn-sm">
											<i class="fa fa-eye"></i>
										</a>
										<a href="{{ route('backoffice.dynamic.capablities.edit', $capability->id) }}" class="btn btn-outline-warning btn-sm">
											<i class="fa fa-edit"></i>
										</a>
										<a href="" class="btn btn-outline-danger btn-sm"
										onclick="deleteData(this, event)"
										data-key="{{ $loop->iteration }}">
											<i class="fa fa-trash"></i>
										</a>
										<form id="form-delete-{{ $loop->iteration }}" method="POST"
											action="{{ route('backoffice.dynamic.capablities.delete', $capability->id) }}">
											@csrf
											@method('delete')
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
                
            </div>
        </div>
    </section>
</div>

@include('backoffice.dynamic.capabilities.modal')
@endsection