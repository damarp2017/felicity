@extends('backoffice.layout.app')

@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/toastr/toastr.min.css') }}">
@endpush

@push('scripts')
<!-- bs-custom-file-input -->
<script src="{{ asset('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('assets/adminlte/plugins/toastr/toastr.min.js') }}"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>

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
                    <h1>Benefits</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.opportunities') }}">Oppotunities</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.opportunities.benefits') }}">Benefits</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-sm-12">
            @foreach (collect($data->benefits)->toArray() as $key => $benefits)
            <div class="card card-success">
                <div class="card-header">
                    {{-- <h3 class="card-title">benefits: {{ $benefits['sequence'] }}</h3> --}}
                </div>
                <form action="{{ route('backoffice.static.opportunities.updateBenefits', $key) }}"
                    enctype="multipart/form-data" method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ Storage::url($benefits['logo']) }}" alt="benefits Logo"
                                style="height: 60px; width: auto;">
                        </div>
                        <div class="form-group">
                            <label for="manifestoDescription">benefits Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logo" name="logo">
                                    <label class="custom-file-label" for="logo">Choose benefits Logo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Benefits Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter our benefits title" required
                                value="{{ old('title') ?? $benefits['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Benefits Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                placeholder="Enter our benefits subtitle" required
                                value="{{ old('subtitle') ?? $benefits['subtitle'] }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection