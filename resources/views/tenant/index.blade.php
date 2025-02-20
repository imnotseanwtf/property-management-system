@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>Tenants</div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    Add Tenant
                </button>
            </div>
            <div class="card card-body border-0 shadow table-wrapper table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    {{-- CREATE --}}
    @include('tenant.modals.create')
    {{-- VIEW --}}
    @include('tenant.modals.view')
    {{-- EDIT --}}
    @include('tenant.modals.edit')
    {{-- DELETE --}}
    @include('tenant.modals.delete')
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script type="module">
        $(() => {
            const tableInstance = window.LaravelDataTables['tenant_dataTable'] = $('#tenant_dataTable')
                .DataTable()

            tableInstance.on('draw.dt', function() {
                $('.viewBtn').on('click', function() {
                    fetch('/tenant/' + $(this).data('tenant'))
                        .then(response => response.json())
                        .then(tenant => {
                            $('#view_first_name').val(tenant.first_name);
                            $('#view_middle_name').val(tenant.middle_name);
                            $('#view_last_name').val(tenant.last_name);
                            $('#view_gender').val(tenant.gender);
                            $('#view_mobile_number').val(tenant.mobile_number);
                            $('#view_email').val(tenant.email);
                        });
                })

                $('.editBtn').click(function() {
                    fetch('/tenant/' + $(this).data('tenant'))
                        .then(response => response.json())
                        .then(tenant => {
                            $('#edit_first_name').val(tenant.first_name);
                            $('#edit_middle_name').val(tenant.middle_name);
                            $('#edit_last_name').val(tenant.last_name);
                            $('#edit_gender').val(tenant.gender);
                            $('#edit_mobile_number').val(tenant.mobile_number);
                            $('#edit_email').val(tenant.email);

                            $('#update-form').attr('action', '/tenant/' + $(this).data(
                                'tenant'));
                        });
                })

                $('.deleteBtn').click(function() {
                    $('#delete-form').attr('action', '/tenant/' + $(this).data('tenant'));
                });
            });
        })
    </script>
@endpush
