@extends('layouts.app')

@section('content')

    <div class="toast-container position-absolute p-3" style="z-index: 1050; top: 0; right: 0;">
        <div id="liveToast" class="toast bg-success text-white fade hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Lead has been approved.
            </div>
        </div>
    </div>

    <div class="flex-grow-1 p-4">
        <div class="container-fluid">
            <div class="card bg-white shadow-sm rounded">
                <div class="card-body p-0">
                    <div class="mb-4 bg-gradient-primary p-3 d-flex justify-content-between align-items-center">
                        <h2 class="card-title mb-0 text-white">View Leads</h2>
                        <div class="form-group mb-0">
                            <input type="text" class="form-control form-control-sm rounded-0" placeholder="Search Name, Email or Phone">
                        </div>
                    </div>
                    <div class="p-4">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-gradient-primary text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>9876543210</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="1" data-lead-name="John Doe">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-1">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="John Doe">Approve</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>8765432109</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="2" data-lead-name="Jane Smith">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-2">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="Jane Smith">Approve</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Peter Jones</td>
                                    <td>peter@example.com</td>
                                    <td>7654321098</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="3" data-lead-name="Peter Jones">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-3">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="Peter Jones">Approve</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Alice Brown</td>
                                    <td>alice.b@example.com</td>
                                    <td>6543210987</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="4" data-lead-name="Alice Brown">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-4">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="Alice Brown">Approve</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Bob Green</td>
                                    <td>bob.g@example.com</td>
                                    <td>5432109876</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="5" data-lead-name="Bob Green">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-5">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="Bob Green">Approve</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Charlie White</td>
                                    <td>charlie.w@example.com</td>
                                    <td>4321098765</td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0">Edit</button>
                                        <button class="btn btn-sm btn-danger rounded-0 disable-btn" data-lead-id="6" data-lead-name="Charlie White">Disable</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 view-status-btn" data-bs-toggle="modal" data-bs-target="#statusModal-6">Add/View Status</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm bg-gradient-primary text-white rounded-0 approve-btn" data-lead-name="Charlie White">Approve</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

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
    </div>

    @for ($i = 1; $i <= 6; $i++)
        <div class="modal fade" id="statusModal-{{ $i }}" tabindex="-1" aria-labelledby="statusModalLabel-{{ $i }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary text-white">
                        <h5 class="modal-title" id="statusModalLabel-{{ $i }}">Lead Status</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Select Date</h6>
                                <input type="date" class="form-control rounded-0">
                            </div>
                            <div class="col-md-6">
                                <h6>Add Status</h6>
                                <textarea class="form-control rounded-0" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>Status History</h6>
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2025-04-19</td>
                                        <td>Initial contact made.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn bg-gradient-primary text-white rounded-0">Save Status</button>
                    </div>
                </div>
            </div>
        </div>
    @endfor

@endsection
