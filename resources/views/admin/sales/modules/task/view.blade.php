@extends('layouts.app')

@section('sidebar')
    @include('admin.sales.sidebar')
@endsection

@section('content')
    <div class="flex-grow-1 p-4">
        <div class="container-fluid">
            <div class="card bg-white shadow-sm rounded-0">
                <div class="card-body p-0">
                    <div class="mb-4 bg-gradient-primary p-3 d-flex justify-content-between align-items-center">
                        <h2 class="card-title mb-0 text-white">Tasks List</h2>
                        <div class="d-flex gap-2">
                            <div class="input-group" style="max-width: 300px;">
                                <input type="text" class="form-control rounded-0 search-input" placeholder="Search Tasks" id="searchTaskName">
                                <button type="button" class="btn btn-light rounded-0 search-button" id="searchButton">
                                    <i class="bi bi-search text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered tasks-table mb-3" id="tasks-table">
                            <thead class="bg-gradient-primary text-white table-header">
                                <tr>
                                    <th>SL No</th>
                                    <th>Task Name</th>
                                    <th>Task Type</th>
                                    <th>Assign To Employee</th>
                                    <th>Task End Date</th>
                                    <th>Priority</th>
                                    <th>View</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Complete Sales Report</td>
                                    <td>Lead</td>
                                    <td>John Doe</td>
                                    <td>2023-07-20</td>
                                    <td>High</td>
                                    <td>
                                        <button class="btn bg-gradient-primary rounded-0 view-button" data-bs-toggle="modal" data-bs-target="#viewTaskModal">
                                            <i class="far fa-eye text-white"></i>
                                        </button>
                                    </td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                 @for($i = 2; $i <= 20; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>Follow up with Customer {{ $i }}</td>
                                        <td>Quotation</td>
                                        <td>Jane Smith</td>
                                        <td>2023-07-{{ 20 + $i }}</td>
                                         <td>Medium</td>
                                        <td>
                                            <button class="btn bg-gradient-primary rounded-0 view-button" data-bs-toggle="modal" data-bs-target="#viewTaskModal">
                                                <i class="far fa-eye text-white"></i>
                                            </button>
                                        </td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3 bg-gradient-primary pagination-container">
                        <div class="text-white pagination-info">
                            Showing 1 to 20 of 50 entries
                        </div>
                        <nav>
                            <ul class="pagination mb-0 pagination-list">
                                <li class="page-item disabled">
                                    <a class="page-link bg-gradient-primary text-white border-dark rounded-0 pagination-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link bg-gradient-primary text-white border-dark rounded-0 pagination-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link bg-gradient-primary text-white border-dark rounded-0 pagination-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link bg-gradient-primary text-white border-dark rounded-0 pagination-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link bg-gradient-primary text-white border-dark rounded-0 pagination-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewTaskModal" tabindex="-1" aria-labelledby="viewTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content view-modal-content">
                <div class="modal-header bg-gradient-primary text-white view-modal-header">
                    <h5 class="modal-title" id="viewTaskModalLabel">Task Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body view-modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Task Name:</strong> Complete Sales Report</p>
                            <p><strong>Task Type:</strong> Lead</p>
                            <p><strong>Assign To Employee:</strong> John Doe</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Task End Date:</strong> 2023-07-20</p>
                            <p><strong>Priority:</strong> High</p>
                            <p><strong>Status:</strong> <span class="badge bg-success">Completed</span></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                         <div class="col-md-12">
                            <p><strong>Task Details:</strong>  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                           <p><strong>Notes:</strong>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-gradient-primary view-modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed top-0 end-0 p-3 toast-container" style="z-index: 11">
        <div id="toastNotification" class="toast bg-gradient-primary text-white notification-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body toast-message" id="toastMessage"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto close-toast-button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .tasks-table th,
    .tasks-table td {
        white-space: nowrap;
        vertical-align: middle;
    }

    .btn {
        border-radius: 0 !important;
    }

    .toast-container {
        position: fixed;
        top: 0;
        end: 0;
        padding: 3;
        z-index: 11;
    }

    .notification-toast {
        min-width: 300px;
        background-color: #343a40 !important;
        color: white !important;
    }

    .notification-toast .toast-body {
        color: white;
    }

    .notification-toast .close-toast-button {
        color: white !important;
        opacity: 0.7;
    }

    .bg-gradient-primary {
        background-color: #343a40 !important;
    }

    .btn-dark {
        background-color: #343a40;
        border-color: #343a40;
    }

    .modal-content.view-modal-content .view-modal-header,
    .modal-content.view-modal-content .view-modal-footer{
        background-color: #343a40 !important;
        color: white !important;
    }

    .bi {
        font-size: 1rem;
    }

    .table-responsive.px-3 .tasks-table tr th,
    .table-responsive.px-3 .tasks-table tr td {
        vertical-align: middle;
    }

    .pagination-container .pagination-list .page-item .pagination-link {
        background-color: #343a40;
        border-color: #495057;
        color: white;
        border-radius: 0;
    }

    .pagination-container .pagination-list .page-item.active .pagination-link {
        background-color: #495057;
        border-color: #495057;
    }

    .pagination-container .pagination-list .page-item.disabled .pagination-link {
        background-color: #343a40;
        border-color: #495057;
        color: #6c757d;
    }

    .pagination-container .pagination-list .page-item .pagination-link:hover {
        background-color: #495057;
        border-color: #495057;
        color: white;
    }

    .mb-4.bg-gradient-primary.p-3 .input-group .search-input {
        border-radius: 0;
        border-color: #dee2e6;
    }

    .mb-4.bg-gradient-primary.p-3 .input-group .search-button {
        border-radius: 0;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .table-responsive.px-3 .tasks-table .table-header th {
        background-color: #343a40;
        color: white;
    }
    .badge{
        border-radius: 0;
    }

</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('#searchButton').on('click', function() {
            var searchText = $('#searchTaskName').val().toLowerCase();
            $('.tasks-table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        });
    });
</script>
@endpush
