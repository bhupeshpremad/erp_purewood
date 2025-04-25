@extends('layouts.app')

@section('content')

    <div class="flex-grow-1 p-4">
        <div class="container-fluid">
            <div class="card bg-white shadow-sm rounded">
                <div class="card-body p-0">
                    <div class="mb-4 bg-gradient-primary p-3">
                        <h2 class="card-title mb-0 text-white">Create Lead</h2>
                    </div>
                    <form action="#" method="POST" class="p-4">
                        @csrf

                        <fieldset class="mb-4">
                            <legend>Buyer's Information</legend>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-4">
                                    <label for="lead_number" class="form-label">Lead Number</label>
                                    <input type="text" class="form-control rounded-0" id="lead_number" name="lead_number" required>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="entry_date" class="form-label">Entry Date</label>
                                    <input type="date" class="form-control rounded-0" id="entry_date" name="entry_date" required>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="lead_source" class="form-label">Lead Source</label>
                                    <input type="text" class="form-control rounded-0" id="lead_source" name="lead_source">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-4">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control rounded-0" id="company_name" name="company_name">
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="contact_name" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control rounded-0" id="contact_name" name="contact_name">
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="contact_phone" class="form-label">Contact Phone</label>
                                    <input type="tel" class="form-control rounded-0" id="contact_phone" name="contact_phone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-4">
                                    <label for="contact_email" class="form-label">Contact Email</label>
                                    <input type="email" class="form-control rounded-0" id="contact_email" name="contact_email">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-4">
                            <legend>Trade Type</legend>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <label for="trade_type" class="form-label">IMPORT/EXPORT</label>
                                    <select class="form-select rounded-0 mx-4 px-2 py-1" id="trade_type" name="trade_type">
                                        <option value="">Select Trade Type</option>
                                        <option value="import">Import</option>
                                        <option value="export">Export</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn bg-gradient-primary text-white rounded-0">Save Lead</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection