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
                    <h1>Insights & Case Studies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.static.capabilities.title') }}">Footer</a>
                        </li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Insights & Case Studies</h3>
                </div>
                <form action="{{ route('backoffice.section.insight.case.study') }}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="insight_subtitle">Insight Subtitle</label>
                            <input type="text" class="form-control" id="insight_subtitle" name="insight_subtitle" required
                                placeholder="Enter Insight Subtitle" value="{{ old('insight_subtitle') ?? ($data ? $data->insight_subtitle : '') }}">
                        </div>

						<div class="form-group">
                            <label for="case_study_subtitle">Case Study Subtitle</label>
                            <input type="text" class="form-control" id="case_study_subtitle" name="case_study_subtitle" required
                                placeholder="Enter Case Study Subtitle" value="{{ old('case_study_subtitle') ?? ($data ? $data->case_study_subtitle : '') }}">
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