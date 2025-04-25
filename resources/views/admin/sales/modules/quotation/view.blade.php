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
                        <h2 class="card-title mb-0 text-white">Quotations List</h2>
                        <div class="d-flex gap-2">
                            <div class="input-group" style="max-width: 300px;">
                                <input type="text" class="form-control rounded-0 search-input" placeholder="Search Quotation" id="searchCustomerName">
                                <button type="button" class="btn btn-light rounded-0 search-button" id="searchButton">
                                    <i class="bi bi-search text-white"></i>
                                </button>
                            </div>
                            <button class="btn rounded-0 export-button" data-bs-toggle="modal" data-bs-target="#exportModal">
                                <i class="bi bi-file-earmark-excel-fill text-white"></i>
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content export-modal-content">
                                <div class="modal-header bg-gradient-primary text-white export-modal-header">
                                    <h5 class="modal-title" id="exportModalLabel">Export Options</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body export-modal-body">
                                    <div class="mb-4">
                                        <h6>Export All Data</h6>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-dark rounded-0 export-option" data-type="excel">
                                                <i class="bi bi-file-earmark-excel-fill me-2"></i>Excel
                                            </button>
                                            <button class="btn btn-dark rounded-0 export-option" data-type="pdf">
                                                <i class="bi bi-file-earmark-pdf-fill me-2"></i>PDF
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <h6>Export Date Range</h6>
                                        <div class="row g-3 mb-3">
                                            <div class="col-md-6">
                                                <input type="date" class="form-control rounded-0 date-input" id="exportStartDate" placeholder="Start Date">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control rounded-0 date-input" id="exportEndDate" placeholder="End Date">
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-dark rounded-0 export-option" data-type="date-excel">
                                                <i class="bi bi-file-earmark-excel-fill me-2"></i>Excel
                                            </button>
                                            <button class="btn btn-dark rounded-0 export-option" data-type="date-pdf">
                                                <i class="bi bi-file-earmark-pdf-fill me-2"></i>PDF
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-gradient-primary export-modal-footer">
                                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered quotations-table mb-3" id="quotations-table">
                            <thead class="bg-gradient-primary text-white table-header">
                                <tr>
                                    <th>SL No</th>
                                    <th>Lead Number</th>
                                    <th>Date of Quote Raised</th>
                                    <th>Quotation Number</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Phone</th>
                                    <th>View</th>
                                    <th>Share</th>
                                    <th>Export</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>L-2023-001</td>
                                    <td>2023-06-15</td>
                                    <td>Q-2023-001</td>
                                    <td>ABC Corporation</td>
                                    <td>contact@abccorp.com</td>
                                    <td>+1 (555) 123-4567</td>
                                    <td>
                                        <button class="btn bg-gradient-primary rounded-0 view-button" data-bs-toggle="modal" data-bs-target="#viewQuotationModal">
                                            <i class="far fa-eye text-white"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn bg-gradient-primary rounded-0 share-button" data-bs-toggle="modal" data-bs-target="#shareQuotationModal">
                                             <i class="far fa-share-square text-white"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bg-gradient-primary rounded-0 me-1 export-excel-row">
                                                <i class="fas fa-file-excel text-white"></i>
                                            </button>
                                            <button class="btn bg-gradient-primary rounded-0 export-pdf-row">
                                                <i class="far fa-file-pdf text-white"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @for($i = 2; $i <= 20; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>L-2023-{{ str_pad($i, 3, '0', STR_PAD_LEFT) }}</td>
                                    <td>2023-06-{{ 14 + $i }}</td>
                                    <td>Q-2023-{{ str_pad($i, 3, '0', STR_PAD_LEFT) }}</td>
                                    <td>Customer {{ $i }}</td>
                                    <td>customer{{ $i }}@example.com</td>
                                    <td>+1 (555) 111-{{ str_pad($i, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td>
                                        <button class="btn bg-gradient-primary rounded-0 view-button" data-bs-toggle="modal" data-bs-target="#viewQuotationModal">
                                            <i class="fas fa-eye text-white"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn bg-gradient-primary rounded-0 share-button" data-bs-toggle="modal" data-bs-target="#shareQuotationModal">
                                            <i class="far fa-share-square text-white"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bg-gradient-primary rounded-0 me-1 export-excel-row">
                                                <i class="fas fa-file-excel text-white"></i>
                                            </button>
                                            <button class="btn bg-gradient-primary rounded-0 export-pdf-row">
                                                <i class="far fa-file-pdf text-white"></i>
                                            </button>
                                        </div>
                                    </td>
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

    <div class="modal fade" id="viewQuotationModal" tabindex="-1" aria-labelledby="viewQuotationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content view-modal-content">
                <div class="modal-header bg-gradient-primary text-white view-modal-header">
                    <h5 class="modal-title" id="viewQuotationModalLabel">Quotation Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body view-modal-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <p><strong>Lead Number:</strong> L-2023-001</p>
                            <p><strong>Date of Quote Raised:</strong> 2023-06-15</p>
                            <p><strong>Quotation Number:</strong> Q-2023-001</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Customer Name:</strong> ABC Corporation</p>
                            <p><strong>Customer Email:</strong> contact@abccorp.com</p>
                            <p><strong>Customer Phone:</strong> +1 (555) 123-4567</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Delivery Term:</strong> FOB</p>
                            <p><strong>Terms of Delivery:</strong> Net 30 days</p>
                            <p><strong>Inspection:</strong> Pre-shipment required</p>
                            <p><strong>Sample Approval Date:</strong> 2023-06-01</p>
                        </div>
                    </div>

                    <h5 class="mb-3">Products</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered product-table">
                            <thead class="bg-gradient-primary text-white product-table-header">
                                <tr>
                                    <th rowspan="2">Sno</th>
                                    <th rowspan="2">Product Image</th>
                                    <th rowspan="2">Item Name/ Code</th>
                                    <th rowspan="2">Description</th>
                                    <th rowspan="2">Assembly</th>
                                    <th colspan="3" class="text-center">Item Dimension</th>
                                    <th colspan="3" class="text-center">Box Dimension</th>
                                    <th rowspan="2">CBM</th>
                                    <th rowspan="2">Wood/Marble Type</th>
                                    <th rowspan="2">No. of Packet</th>
                                    <th rowspan="2">Iron Gauge</th>
                                    <th rowspan="2">MDF Finish</th>
                                    <th rowspan="2">MOQ</th>
                                    <th rowspan="2">Price USD</th>
                                    <th rowspan="2">Total</th>
                                    <th rowspan="2">Comments</th>
                                </tr>
                                <tr>
                                    <th>H</th>
                                    <th>W</th>
                                    <th>D</th>
                                    <th>H</th>
                                    <th>W</th>
                                    <th>D</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="{{ asset('images/Purewood-F-logo.svg') }}" alt="Product Image" class="img-fluid mb-2 product-image" style="width:100px; height:70px; object-fit:contain;">
                                    </td>
                                    <td>FURN-001</td>
                                    <td>Wooden dining table with 6 chairs</td>
                                    <td>YES</td>
                                    <td>30</td>
                                    <td>60</td>
                                    <td>30</td>
                                    <td>35</td>
                                    <td>65</td>
                                    <td>35</td>
                                    <td>0.5</td>
                                    <td>MDF, PLY</td>
                                    <td>2</td>
                                    <td>18G</td>
                                    <td>Matte</td>
                                    <td>50</td>
                                    <td>120.00</td>
                                    <td>6000.00</td>
                                    <td>Available in different colors</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="{{ asset('images/Purewood-F-logo.svg') }}" alt="Product Image" class="img-fluid mb-2 product-image" style="width:100px; height:70px; object-fit:contain;">
                                    </td>
                                    <td>FURN-002</td>
                                    <td>Office desk with drawer</td>
                                    <td>NO</td>
                                    <td>28</td>
                                    <td>48</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>50</td>
                                    <td>22</td>
                                    <td>0.4</td>
                                    <td>MDF</td>
                                    <td>1</td>
                                    <td>20G</td>
                                    <td>Glossy</td>
                                    <td>30</td>
                                    <td>150.00</td>
                                    <td>4500.00</td>
                                    <td>Assembly required</td>
                                </tr>
                                <tr class="fw-bold grand-total-row">
                                    <td colspan="19" class="text-end">Grand Total:</td>
                                    <td>10,500.00</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer bg-gradient-primary view-modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="shareQuotationModal" tabindex="-1" aria-labelledby="shareQuotationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content share-modal-content">
                <div class="modal-header bg-gradient-primary text-white share-modal-header">
                    <h5 class="modal-title" id="shareQuotationModalLabel">Share Quotation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body share-modal-body">
                    <div class="mb-3">
                        <label for="recipient_email" class="form-label">Recipient Email</label>
                        <input type="email" class="form-control rounded-0 email-input" id="recipient_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_subject" class="form-label">Subject</label>
                        <input type="text" class="form-control rounded-0 subject-input" id="email_subject" value="Quotation #Q-2023-001" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_message" class="form-label">Message</label>
                        <textarea class="form-control rounded-0 message-input" id="email_message" rows="5" required>Dear Sir/Madam, Please find attached the quotation #Q-2023-001 for your reference. Best regards,  Admin User</textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input attach-option" type="checkbox" id="attach_excel" checked>
                        <label class="form-check-label" for="attach_excel">
                            Attach Excel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attach-option" type="checkbox" id="attach_pdf">
                        <label class="form-check-label" for="attach_pdf">
                            Attach PDF
                        </label>
                    </div>
                    </div>
                <div class="modal-footer bg-gradient-primary share-modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-light rounded-0 send-email-button" id="sendEmailBtn">Send Email</button>
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
    .quotations-table th,
    .quotations-table td {
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

    .modal-content.export-modal-content .export-modal-header,
    .modal-content.export-modal-content .export-modal-footer,
    .modal-content.view-modal-content .view-modal-header,
    .modal-content.view-modal-content .view-modal-footer,
    .modal-content.share-modal-content .share-modal-header,
    .modal-content.share-modal-content .share-modal-footer {
        background-color: #343a40 !important;
        color: white !important;
    }

    .bi {
        font-size: 1rem;
    }

    .table-responsive.px-3 .quotations-table tr th,
    .table-responsive.px-3 .quotations-table tr td {
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

    .mb-4.bg-gradient-primary.p-3 .export-button {
        border-radius: 0;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
        color: #343a40;
    }

    .modal-content.export-modal-content .export-modal-body .form-control.date-input {
        border-radius: 0;
    }

    .table-responsive.px-3 .quotations-table .table-header th {
        background-color: #343a40;
        color: white;
    }

    /* .table-responsive tr, .table-responsive tr th, .table-responsive tr td{
        vertical-align: middle;
    } */
</style>
@endpush