@extends('backoffice.layout.app')

@push('styles')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- Toastr -->
    <script src="{{ asset('assets/adminlte/plugins/toastr/toastr.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    @if ($message = Session::get('success'))
        <script>
            message = {!! json_encode($message) !!}
            $(function() {
                toastr.success(message);
            });
        </script>
    @endif
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            } );
        </script>
@endpush

@section('main')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Subscribers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Subscriber</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">List</a>
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
                        <h3 class="card-title">Subscribers Data</h3>
                    </div>

                    <div class="card-body">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subscriber->name }}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td><button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
