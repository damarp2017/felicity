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
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting') }}">Setting</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('backoffice.setting.edit') }}">Edit</a>
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
                    <h3 class="card-title">Title</h3>
                </div>
                <form action="{{ route('backoffice.setting.update') }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="link">link</label>
                            <input type="text" class="form-control" id="link" name="link" required
                                placeholder="Enter link" value="{{ old('link') ?? ($data ? $data->link : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="favicon">favicon</label>
                            <input type="text" class="form-control" id="favicon" name="favicon" required
                                placeholder="Enter favicon" value="{{ old('favicon') ?? ($data ? $data->favicon : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="company_name">company_name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" required
                                placeholder="Enter company_name" value="{{ old('company_name') ?? ($data ? $data->company_name : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email" required
                                placeholder="Enter email" value="{{ old('email') ?? ($data ? $data->email : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="facebook">facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" required
                                placeholder="Enter facebook" value="{{ old('facebook') ?? ($data ? $data->facebook : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="twitter">twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" required
                                placeholder="Enter twitter" value="{{ old('twitter') ?? ($data ? $data->twitter : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="instagram">instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" required
                                placeholder="Enter instagram" value="{{ old('instagram') ?? ($data ? $data->instagram : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">linkedin</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" required
                                placeholder="Enter linkedin" value="{{ old('linkedin') ?? ($data ? $data->linkedin : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="youtube">youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" required
                                placeholder="Enter youtube" value="{{ old('youtube') ?? ($data ? $data->youtube : '') }}">
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
