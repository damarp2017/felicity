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
                    <h1>Reasons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.opportunities') }}">Oppotunities</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.opportunities.reasons') }}">reasons</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-sm-12">
            @foreach (collect($data->reasons)->toArray() as $key => $reasons)
            <div class="card card-success">
                <div class="card-header">
                    {{-- <h3 class="card-title">reasons: {{ $reasons['sequence'] }}</h3> --}}
                </div>
                <form action="{{ route('backoffice.static.opportunities.updateReasons', $key) }}"
                    enctype="multipart/form-data" method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ Storage::url($reasons['image']) }}" alt="reasons image"
                                style="height: 60px; width: auto;">
                        </div>
                        <div class="form-group">
                            <label for="manifestoDescription">Reasons Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose reasons image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Reasons Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter our reasons title" required
                                value="{{ old('title') ?? $reasons['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Reasons Description</label>
                            <textarea type="text" class="form-control" id="description" name="description"
                                placeholder="Enter our reasons description"
                                required>{{ old('description') ?? $reasons['description'] }}</textarea>
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