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

@if ($message = Session::get('error'))
<script>
    message = {!! json_encode($message) !!}
    $(function() {
        toastr.error(message);
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
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('backoffice.static.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.home.visionAndManifesto') }}">Vision
                                and Manifesto</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Vision and Manifesto</h3>
                </div>
                <form action="{{ route('backoffice.static.home.updateVisionAndManifesto') }}" method="POST"
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="vision">Vision Title</label>
                            <input type="text" class="form-control" id="vision" name="vision" required
                                placeholder="Enter vision title" value="{{ old('vision') ?? $data->vision }}">
                            <div class="form-group">
                                <label for="vision_description">Vision Description</label>
                                <textarea type="text" class="form-control" id="vision_description"
                                    name="vision_description" required
                                    placeholder="Enter vision description">{{ old('vision_description') ?? $data->vision_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ $data->manifesto_image }}" style="max-height: 300px; width: auto"
                                alt="Manifesto Image">
                        </div>
                        <div class="form-group">
                            <label for="manifestoImage">Manifesto Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="manifesto_image"
                                        name="manifesto_image">
                                    <label class="custom-file-label" for="manifesto_image">Choose Manifesto
                                        Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="manifesto">Manifesto Title</label>
                            <input type="text" class="form-control" id="manifesto" name="manifesto" required
                                placeholder="Enter manifesto title" value="{{ old('manifesto') ?? $data->manifesto }}">
                        </div>
                        <div class="form-group">
                            <label for="manifesto_description">Manifesto Description</label>
                            <textarea type="text" class="form-control" id="manifesto_description"
                                name="manifesto_description" required
                                placeholder="Enter our manifesto description">{{ old('manifesto_description') ?? $data->manifesto_description }}</textarea>
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
<div id="modal-wrapper"></div>
@endsection