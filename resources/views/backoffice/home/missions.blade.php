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

<script>
    function showAlertModal(index) {
        const url = "{{ route('backoffice.home.deleteMissions', '') }}" + '/' + index;
        const modal = `
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">Warning</h4>
                    </div>
                    <form action="${url}" method="post">
                        @method('delete')
                        @csrf
                        <div class="modal-body">
                            <p>Are you sure to delete this data?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-outline-danger">Yes, sure</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        `;
        $('#modal-wrapper').html(modal);
        $('#modal-danger').modal('show');
    }
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
                    <h1>Missions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('backoffice.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backoffice.home.missions') }}">Missions</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Missions</h3>
                </div>
                <form action="{{ route('backoffice.home.storeMissions') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="manifestoDescription">Mission Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logo" name="logo" required>
                                    <label class="custom-file-label" for="logo">Choose Mission Logo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sequence">Sequence Number</label>
                            <input type="number" class="form-control" id="sequence" name="sequence" required
                                placeholder="Enter sequence number" value="{{ old('sequence') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Mission Title</label>
                            <input type="text" class="form-control" id="title" name="title" required
                                placeholder="Enter our mission title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Mission Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" required
                                placeholder="Enter our mission subtitle" value="{{ old('subtitle') }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            @foreach (collect($data->missions)->sortBy('sequence')->toArray() as $key => $mission)
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Mission: {{ $mission['sequence'] }}</h3>
                </div>
                <form action="{{ route('backoffice.home.updateMissions', $key) }}" enctype="multipart/form-data"
                    method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ asset($mission['logo']) }}" alt="Mission Logo"
                                style="height: 60px; width: auto;">
                        </div>
                        <div class="form-group">
                            <label for="manifestoDescription">Mission Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logo" name="logo">
                                    <label class="custom-file-label" for="logo">Choose Mission Logo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sequence">Sequence Number</label>
                            <input type="number" class="form-control" id="sequence" name="sequence"
                                placeholder="Enter sequence number" required
                                value="{{ old('sequence') ?? $mission['sequence'] }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Mission Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter our mission title" required
                                value="{{ old('title') ?? $mission['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Mission Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                placeholder="Enter our mission subtitle" required
                                value="{{ old('subtitle') ?? $mission['subtitle'] }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>&ensp;
                        <a href="javascript:void(0)" onclick="showAlertModal({{ $key }})"
                            class="text-danger"><u>Delete</u></a>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</div>
<div id="modal-wrapper"></div>
@endsection