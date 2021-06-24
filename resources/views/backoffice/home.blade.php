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
    function showAlertModal() {
        const modal = `
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">Warning</h4>
                    </div>
                    <form action="#" method="post">
                        @method('delete')
                        @csrf
                        <div class="modal-body">
                            <p>Are you sure to delete data: aaaa?</p>
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
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Title and Subtitle</h3>
                </div>
                <form action="{{ route('backoffice.home.updateTitleAndSubtitle') }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required
                                placeholder="Enter Title" value="{{ old('title') ?? $data->title }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" required
                                placeholder="Enter subtitle" value="{{ old('subtitle') ?? $data->subtitle }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Vision and Manifesto</h3>
                </div>
                <form action="{{ route('backoffice.home.updateVisionAndManifesto') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="vision">Vision Title</label>
                            <input type="text" class="form-control" id="vision" name="vision" required
                                placeholder="Enter vision title" value="{{ old('vision') ?? $data->vision }}">
                            <div class="form-group">
                                <label for="visionDescription">Vision Description</label>
                                <textarea type="text" class="form-control" id="visionDescription"
                                    name="visionDescription" required
                                    placeholder="Enter vision description">{{ old('vision_description') ?? $data->vision_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($data->manifesto_image) }}" style="max-height: 300px; width: auto"
                                alt="Manifesto Image">
                        </div>
                        <div class="form-group">
                            <label for="manifestoImage">Manifesto Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="manifestoImage"
                                        name="manifestoImage">
                                    <label class="custom-file-label" for="manifestoImage">Choose Manifesto Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="manifesto">Manifesto Title</label>
                            <input type="text" class="form-control" id="manifesto" name="manifesto" required
                                placeholder="Enter manifesto title" value="{{ old('manifesto') ?? $data->manifesto }}">
                        </div>
                        <div class="form-group">
                            <label for="manifestoDescription">Manifesto Description</label>
                            <textarea type="text" class="form-control" id="manifestoDescription"
                                name="manifestoDescription" required
                                placeholder="Enter our manifesto description">{{ old('manifesto_description') ?? $data->manifesto_description }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Button 1 and Button 2</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="button1Title">Button 1 Title</label>
                            <input type="text" class="form-control" id="button1Title" name="button1Title"
                                placeholder="Enter button 1 title" required
                                value="{{ old('button1Title') ?? $data->button_1['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button1Link">Button 1 Link</label>
                            <input type="text" class="form-control" id="button1Link" name="button1Link"
                                placeholder="Enter button 1 link" required
                                value="{{ old('button1Link') ?? $data->button_1['link'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button2Title">Button 2 Title</label>
                            <input type="text" class="form-control" id="button2Title" name="button2Title"
                                placeholder="Enter button 2 title" required
                                value="{{ old('button2Title') ?? $data->button_2['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button2Link">Button 2 Link</label>
                            <input type="text" class="form-control" id="button2Link" name="button2Link"
                                placeholder="Enter button 2 link" required
                                value="{{ old('button2Link') ?? $data->button_2['link'] }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Missions</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="manifestoDescription">Mission Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="visionImage" name="visionImage"
                                        required>
                                    <label class="custom-file-label" for="visionImage">Choose Mission Logo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sequence">Sequence Number</label>
                            <input type="number" class="form-control" id="sequence" name="sequence" required
                                placeholder="Enter sequence number" value="{{ old('sequence') }}">
                        </div>
                        <div class="form-group">
                            <label for="missionTitle">Mission Title</label>
                            <input type="text" class="form-control" id="missionTitle" name="missionTitle" required
                                placeholder="Enter our mission title" value="{{ old('missionTitle') }}">
                        </div>
                        <div class="form-group">
                            <label for="missionSubtitle">Mission Subtitle</label>
                            <input type="text" class="form-control" id="missionSubtitle" name="missionSubtitle" required
                                placeholder="Enter our mission subtitle" value="{{ old('missionSubtitle') }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            @foreach (collect($data->missions)->sortBy('sequence')->toArray() as $mission)
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Mission: {{ $mission['sequence'] }}</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ asset($mission['logo']) }}" alt="Mission Logo"
                                style="height: 60px; width: auto;">
                        </div>
                        <div class="form-group">
                            <label for="manifestoDescription">Mission Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="visionImage" name="visionImage">
                                    <label class="custom-file-label" for="visionImage">Choose Mission Logo</label>
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
                            <label for="missionTitle">Mission Title</label>
                            <input type="text" class="form-control" id="missionTitle" name="missionTitle"
                                placeholder="Enter our mission title" required
                                value="{{ old('missionTitle') ?? $mission['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="missionSubtitle">Mission Subtitle</label>
                            <input type="text" class="form-control" id="missionSubtitle" name="missionSubtitle"
                                placeholder="Enter our mission subtitle" required
                                value="{{ old('missionSubtitle') ?? $mission['subtitle'] }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>&ensp;
                        <a href="javascript:void(0)" onclick="showAlertModal()" class="text-danger"><u>Delete</u></a>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</div>
<div id="modal-wrapper"></div>
@endsection