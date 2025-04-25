@extends('layouts.app')

@section('sidebar')
    @include('admin.sales.sidebar')
@endsection

@section('content')

    <div class="flex-grow-1 p-4">
        <div class="container-fluid">
            <div class="card bg-white shadow-sm rounded">
                <div class="card-body p-0">
                    <div class="mb-4 bg-gradient-primary p-3">
                        <h2 class="card-title mb-0 text-white">Create Task</h2>
                    </div>
                    <form action="#" method="POST" class="p-4">
                        @csrf

                        <fieldset class="mb-4">
                            <legend>Task Information</legend>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-4">
                                    <label for="task_name" class="form-label">Task Name</label>
                                    <input type="text" class="form-control rounded-0" id="task_name" name="task_name" required>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="task_type" class="form-label">Task Type</label>
                                    <select class="form-select rounded-0" id="task_type" name="task_type" required>
                                        <option value="">Select Task Type</option>
                                        <option value="lead">Lead</option>
                                        <option value="quotation">Quotation</option>
                                        <option value="estimate">Estimate</option>
                                        <option value="performa_invoice">Performa Invoice</option>
                                        <option value="commercial_invoice">Commercial Invoice</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                     <label for="related_item" class="form-label">Related Item</label>
                                        <select class="form-select rounded-0" id="related_item" name="related_item">
                                            <option value="">Select Related Item</option>
                                            </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-4">
                                    <label for="assigned_to" class="form-label">Assign To Employee</label>
                                    <select class="form-select rounded-0" id="assigned_to" name="assigned_to" required>
                                        <option value="">Select Employee</option>
                                        <option value="employee1">Employee 1</option>
                                        <option value="employee2">Employee 2</option>
                                        <option value="employee3">Employee 3</option>
                                        </select>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                        <label for="task_end_date" class="form-label">Task End Date</label>
                                        <input type="date" class="form-control rounded-0" id="task_end_date" name="task_end_date" required>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label for="priority" class="form-label">Priority</label>
                                    <select class="form-select rounded-0" id="priority" name="priority">
                                        <option value="">Select Priority</option>
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                            </div>

                        </fieldset>
                         <div class="row mb-3">
                                <div class="col-sm-12 col-md-6">
                                    <label for="task_details" class="form-label">Task Details</label>
                                    <textarea class="form-control rounded-0" id="task_details" name="task_details" rows="3"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control rounded-0" id="notes" name="notes" rows="3"></textarea>
                                </div>
                            </div>

                        <button type="submit" class="btn bg-gradient-primary text-white rounded-0">Save Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const taskTypeSelect = document.getElementById('task_type');
        const relatedItemSelect = document.getElementById('related_item');

        taskTypeSelect.addEventListener('change', function() {
            const selectedTaskType = this.value;
            relatedItemSelect.innerHTML = '<option value="">Select Related Item</option>'; // Clear previous options

            if (selectedTaskType === 'lead') {
                // Replace with your actual lead data loading logic (e.g., from an API or a predefined array)
                const leadOptions = [
                    { id: 'lead1', name: 'Lead 1' },
                    { id: 'lead2', name: 'Lead 2' },
                    { id: 'lead3', name: 'Lead 3' },
                ];
                leadOptions.forEach(lead => {
                    const option = document.createElement('option');
                    option.value = lead.id;
                    option.textContent = lead.name;
                    relatedItemSelect.appendChild(option);
                });
            } else if (selectedTaskType === 'quotation') {
                // Replace with your actual quotation data loading logic
                const quotationOptions = [
                    { id: 'quote1', name: 'Quotation 1' },
                    { id: 'quote2', name: 'Quotation 2' },
                ];
                quotationOptions.forEach(quotation => {
                    const option = document.createElement('option');
                    option.value = quotation.id;
                    option.textContent = quotation.name;
                    relatedItemSelect.appendChild(option);
                });
            } else if (selectedTaskType === 'estimate') {
                const estimateOptions = [
                    { id: 'est1', name: 'Estimate 1' },
                    { id: 'est2', name: 'Estimate 2' },
                ];
                estimateOptions.forEach(estimate => {
                    const option = document.createElement('option');
                    option.value = estimate.id;
                    option.textContent = estimate.name;
                    relatedItemSelect.appendChild(option);
                });
            }else if (selectedTaskType === 'performa_invoice') {
                const performaInvoiceOptions = [
                    { id: 'pi1', name: 'Performa Invoice 1' },
                    { id: 'pi2', name: 'Performa Invoice 2' },
                ];
                performaInvoiceOptions.forEach(performaInvoice => {
                    const option = document.createElement('option');
                    option.value = performaInvoice.id;
                    option.textContent = performaInvoice.name;
                    relatedItemSelect.appendChild(option);
                });
            }else if (selectedTaskType === 'commercial_invoice') {
                const commercialInvoiceOptions = [
                    { id: 'ci1', name: 'Commercial Invoice 1' },
                    { id: 'ci2', name: 'Commercial Invoice 2' },
                ];
                commercialInvoiceOptions.forEach(commercialInvoice => {
                    const option = document.createElement('option');
                    option.value = commercialInvoice.id;
                    option.textContent = commercialInvoice.name;
                    relatedItemSelect.appendChild(option);
                });
            }
            // Add logic for other task types (e.g., 'estimate', 'performa_invoice', 'commercial_invoice')
        });
    </script>
@endsection
