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
                        <li class="breadcrumb-item"><a href="{{ route('backoffice.static.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backoffice.static.home') }}">Button 1 and Button
                                2</a>
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
                    <h3 class="card-title">Button 1 and Button 2</h3>
                </div>
                <form action="{{ route('backoffice.static.home.updateButton1AndButton2') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="button_1_title">Button 1 Title</label>
                            <input type="text" class="form-control" id="button_1_title" name="button_1_title"
                                placeholder="Enter button 1 title" required
                                value="{{ old('button_1_title') ?? $data->button_1['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button_1_link">Button 1 Link</label>
                            <input type="text" class="form-control" id="button_1_link" name="button_1_link"
                                placeholder="Enter button 1 link" required
                                value="{{ old('button_1_link') ?? $data->button_1['link'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button_2_title">Button 2 Title</label>
                            <input type="text" class="form-control" id="button_2_title" name="button_2_title"
                                placeholder="Enter button 2 title" required
                                value="{{ old('button_2_title') ?? $data->button_2['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="button_2_link">Button 2 Link</label>
                            <input type="text" class="form-control" id="button_2_link" name="button_2_link"
                                placeholder="Enter button 2 link" required
                                value="{{ old('button_2_link') ?? $data->button_2['link'] }}">
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