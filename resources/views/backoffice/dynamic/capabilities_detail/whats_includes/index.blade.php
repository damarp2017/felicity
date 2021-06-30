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
</script>

@endpush

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Whats Includes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting') }}">Whats Includes</a></li>
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
				<div class="card">
					<div class="card-header">
						<div class="row justify-content-between">
							<div>
								<h3 class="card-title">Whats Included</h3>
							</div>
							<div>
								<a href="{{ route('backoffice.dynamic.what.include.create', $capabilityId) }}" class="btn btn-primary bt-sm">Create Whats Include</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($whatIncludes as $item)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $item->title }}</td>
										<td>{{ $item->subtitle }}</td>
										<td>
											<a data-img="{{ $item->image }}" class="btn btn-outline-primary btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="{{ route('backoffice.dynamic.what.include.edit', [$capabilityId, $item->id]) }}" class="btn btn-outline-warning btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="" class="btn btn-outline-danger btn-sm"
											onclick="deleteData(this, event)"
											data-key="{{ $loop->iteration }}">
												<i class="fa fa-trash"></i>
											</a>
											<form id="form-delete-{{ $loop->iteration }}" method="POST"
												action="{{ route('backoffice.dynamic.what.include.delete', [$capabilityId, $item->id]) }}">
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
		</div>
		
        
    </section>
</div>
@endsection
