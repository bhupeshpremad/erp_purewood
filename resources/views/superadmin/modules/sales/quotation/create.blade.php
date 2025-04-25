@extends('layouts.app')

@section('content')

    <div class="flex-grow-1 p-4" id="quotationPage">
        <div class="container-fluid">
            <div class="card bg-white shadow-sm rounded">
                <div class="card-body p-0">
                    <div class="mb-4 bg-gradient-primary text-white p-3">
                        <h2 class="card-title mb-0 text-white">Create Quotation</h2>
                    </div>
                    <form action="" method="POST" class="p-4" id="quotationForm">
                        @csrf

                        <fieldset class="mb-4">
                            <legend>Quotation Information</legend>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="lead_number" class="form-label">Lead Number</label>
                                    <input type="text" class="form-control rounded-0" id="lead_number" name="lead_number">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="quotation_date" class="form-label">Date of Quote Raised</label>
                                    <input type="date" class="form-control rounded-0" id="quotation_date" name="quotation_date" required>
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="quotation_number" class="form-label">Quotation Number</label>
                                    <input type="text" class="form-control rounded-0" id="quotation_number" name="quotation_number">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="customer_name" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control rounded-0" id="customer_name" name="customer_name">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="customer_email" class="form-label">Customer Email</label>
                                    <input type="email" class="form-control rounded-0" id="customer_email" name="customer_email">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="customer_phone" class="form-label">Customer Phone</label>
                                    <input type="tel" class="form-control rounded-0" id="customer_phone" name="customer_phone">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="delivery_term" class="form-label">Delivery Term</label>
                                    <input type="text" class="form-control rounded-0" id="delivery_term" name="delivery_term">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="terms_of_delivery" class="form-label">Terms of Delivery</label>
                                    <input type="text" class="form-control rounded-0" id="terms_of_delivery" name="terms_of_delivery">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="inspection" class="form-label">Inspection</label>
                                    <input type="text" class="form-control rounded-0" id="inspection" name="inspection">
                                </div>
                                <div class="col-sm-6 col-md-3 mb-3">
                                    <label for="sample_approval_date" class="form-label">Sample Approval Date</label>
                                    <input type="date" class="form-control rounded-0" id="sample_approval_date" name="sample_approval_date">
                                </div>
                            </div>
                        </fieldset>

                        <div>
                            <button type="button" class="btn bg-gradient-primary text-white rounded-0 mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal" aria-haspopup="dialog" aria-expanded="false">Add Product</button>
                            <div class="table-responsive">
                                <table id="productTable" class="table table-bordered">
                                    <thead class="bg-gradient-primary text-white text-white">
                                        <tr>
                                            <th class="bg-gradient-primary text-white text-white">Sno</th>
                                            <th class="bg-gradient-primary text-white text-white">Product Image</th>
                                            <th class="bg-gradient-primary text-white text-white">Item Name/ Code</th>
                                            <th class="bg-gradient-primary text-white text-white">Description</th>
                                            <th class="bg-gradient-primary text-white text-white">Assembly</th>
                                            <th colspan="3" class="text-center bg-gradient-primary text-white text-white">Item Dimension</th>
                                            <th colspan="3" class="text-center bg-gradient-primary text-white text-white">Box Dimension</th>
                                            <th class="bg-gradient-primary text-white text-white">CBM</th>
                                            <th class="bg-gradient-primary text-white text-white">Wood/Marble Type</th>
                                            <th class="bg-gradient-primary text-white text-white">No. of Packet</th>
                                            <th class="bg-gradient-primary text-white text-white">Iron Gauge</th>
                                            <th class="bg-gradient-primary text-white text-white">MDF Finish</th>
                                            <th class="bg-gradient-primary text-white text-white">MOQ</th>
                                            <th class="bg-gradient-primary text-white text-white">Price USD</th>
                                            <th class="bg-gradient-primary text-white text-white">Total</th>
                                            <th class="bg-gradient-primary text-white text-white">Comments</th>
                                            <th class="bg-gradient-primary text-white text-white">Action</th>
                                        </tr>
                                        <tr>
                                            <th></th><th></th><th></th><th></th><th></th>
                                            <th class="bg-gradient-primary text-white text-white">H</th><th class="bg-gradient-primary text-white text-white">W</th><th class="bg-gradient-primary text-white text-white">D</th>
                                            <th class="bg-gradient-primary text-white text-white">H</th><th class="bg-gradient-primary text-white text-white">W</th><th class="bg-gradient-primary text-white text-white">D</th>
                                            <th></th><th></th><th></th><th></th>
                                            <th></th><th></th><th></th><th></th><th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>

                        <input type="hidden" name="products" id="productsData">

                        <button type="submit" class="btn bg-gradient-primary text-white rounded-0 mt-4">Submit Quotation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white text-white">
                    <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 pt-4 pb-3">
                    <form id="addProductForm">
                        <input type="hidden" id="edit_product_index">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="item_name" class="form-label">Item Name/ Code</label>
                                <input type="text" class="form-control rounded-0 modal-input required" id="item_name" data-column="item_name">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="assembly" class="form-label">Assembly</label>
                                <select class="form-select rounded-0 modal-input required" id="assembly" data-column="assembly">
                                    <option value="">Select</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="cbm" class="form-label">CBM</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="cbm" step="0.001" data-column="cbm">
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h6 class="mb-2">Item Dimention</h4>
                            </div>
                            <div class="col-md-4">
                                <label for="item_h" class="form-label">Item H</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="item_h" data-column="item_h">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="item_w" class="form-label">Item W</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="item_w" data-column="item_w">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="item_d" class="form-label">Item D</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="item_d" data-column="item_d">
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h6 class="mb-2">Box Dimention</h4>
                            </div>
                            <div class="col-md-4">
                                <label for="box_h" class="form-label">Box H</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="box_h" data-column="box_h">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="box_w" class="form-label">Box W</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="box_w" data-column="box_w">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="box_d" class="form-label">Box D</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="box_d" data-column="box_d">
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="no_of_packet" class="form-label">No. of Packet</label>
                                <input type="number" class="form-control rounded-0 modal-input" id="no_of_packet" data-column="no_of_packet">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="iron_gauge" class="form-label">Iron Gauge</label>
                                <input type="text" class="form-control rounded-0 modal-input" id="iron_gauge" data-column="iron_gauge">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="mdf_finish" class="form-label">MDF Finish</label>
                                <input type="text" class="form-control rounded-0 modal-input" id="mdf_finish" data-column="mdf_finish">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="moq" class="form-label">MOQ</label>
                                <input type="number" class="form-control rounded-0 modal-input required" id="moq" data-column="moq">
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="price_usd" class="form-label">Price USD</label>
                                <input type="number" class="form-control rounded-0 modal-input required" id="price_usd" step="0.01" data-column="price_usd">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="comments" class="form-label">Comments</label>
                                <input type="text" class="form-control rounded-0 modal-input" id="comments" data-column="comments">
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control rounded-0 modal-input" id="description" data-column="description"></textarea>
                                <div class="error-message text-danger"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="wood_marble_type" class="form-label">Wood/Marble Type</label>
                                <select class="form-select rounded-0 modal-input" id="wood_marble_type" multiple data-column="wood_marble_type[]">
                                    <option value="MDF">MDF</option>
                                    <option value="PLY">PLY</option>
                                </select>
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="product_image" class="form-label">Product Image</label>
                                <input type="file" class="form-control rounded-0 modal-input" id="product_image" data-column="product_image">
                                <div class="error-message text-danger"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn bg-gradient-primary text-white rounded-0" id="addProductToTable">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="toastNotification" class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endsection



@push('scripts')
<script>
    $(document).ready(function() {
        let productCounter = 0;
        const productTableBody = $('#productTable tbody');
        const addProductForm = $('#addProductForm')[0];
        let editingRow = null;
        const addProductModal = $('#addProductModal');
        const addProductButton = $('#addProductToTable');
        const toastNotification = new bootstrap.Toast(document.getElementById('toastNotification'));
        const modalTriggerButton = $('[data-bs-target="#addProductModal"]');

        // Show toast notification
        function showToast(message) {
            $('#toastMessage').text(message);
            toastNotification.show();
        }

        // Proper modal accessibility handling
        addProductModal.on('show.bs.modal', function() {
            $(this).removeAttr('aria-hidden');
        });

        addProductModal.on('shown.bs.modal', function() {
            $(this).css('display', 'block');
            // Set focus to first input when modal opens
            $('#item_name').trigger('focus');
        });

        addProductModal.on('hide.bs.modal', function() {
            // Remove focus from any elements inside modal before hiding
            $(this).find(':focus').trigger('blur');
        });

        addProductModal.on('hidden.bs.modal', function() {
            $(this).attr('aria-hidden', 'true');
            $(this).css('display', 'none');
            addProductForm.reset();
            $('.error-message').text('');
            editingRow = null;
            $('#addProductModalLabel').text('Add New Product');
            addProductButton.text('Add');
            
            // Return focus to the trigger button
            modalTriggerButton.trigger('focus');
        });

        addProductButton.on('click', function() {
            console.log('Add button clicked');
            let hasErrors = false;
            $('.modal-input.required').each(function() {
                const input = $(this);
                const value = input.val();
                const fieldName = input.attr('id') || input.data('column');

                if (value === '' || value === null) {
                    input.siblings('.error-message').text('This field is required.');
                    hasErrors = true;
                } else {
                    input.siblings('.error-message').text('');
                }
            });

            if (hasErrors) {
                return;
            }

            const formData = {
                item_name: $('#item_name').val(),
                assembly: $('#assembly').val(),
                cbm: $('#cbm').val(),
                item_h: $('#item_h').val(),
                item_w: $('#item_w').val(),
                item_d: $('#item_d').val(),
                box_h: $('#box_h').val(),
                box_w: $('#box_w').val(),
                box_d: $('#box_d').val(),
                no_of_packet: $('#no_of_packet').val(),
                iron_gauge: $('#iron_gauge').val(),
                mdf_finish: $('#mdf_finish').val(),
                moq: $('#moq').val(),
                price_usd: $('#price_usd').val(),
                comments: $('#comments').val(),
                description: $('#description').val(),
                wood_marble_type: $('#wood_marble_type').val() || [],
                product_image_file: $('#product_image')[0].files[0]
            };

            if (editingRow) {
                updateTableRow(editingRow, formData);
                addProductModal.modal('hide');
                showToast('Product updated successfully');
            } else {
                productCounter++;
                const newRow = createTableRow(productCounter, formData);
                productTableBody.append(newRow);
                addProductModal.modal('hide');
                showToast('Product added successfully');
            }
        });

        $(document).on('click', '.remove-product', function() {
            $(this).closest('tr').remove();
            updateSerialNumbers();
            productCounter = $('#productTable tbody tr').length;
            showToast('Product removed successfully');
        });

        $(document).on('click', '.edit-product', function() {
            editingRow = $(this).closest('tr');
            const rowData = getRowData(editingRow);
            populateModal(rowData);
            $('#addProductModalLabel').text('Edit Product');
            addProductButton.text('Save Changes');
            addProductModal.modal('show');
        });

        function updateTableRow(row, formData) {
            row.find('td:nth-child(3)').text(formData.item_name);
            row.find('td:nth-child(4)').text(formData.description);
            row.find('td:nth-child(5)').text(formData.assembly);
            row.find('td:nth-child(6)').text(formData.item_h);
            row.find('td:nth-child(7)').text(formData.item_w);
            row.find('td:nth-child(8)').text(formData.item_d);
            row.find('td:nth-child(9)').text(formData.box_h);
            row.find('td:nth-child(10)').text(formData.box_w);
            row.find('td:nth-child(11)').text(formData.box_d);
            row.find('td:nth-child(12)').text(formData.cbm);
            row.find('td:nth-child(13)').text(formData.wood_marble_type.join(', '));
            row.find('td:nth-child(14)').text(formData.no_of_packet);
            row.find('td:nth-child(15)').text(formData.iron_gauge);
            row.find('td:nth-child(16)').text(formData.mdf_finish);
            row.find('td:nth-child(17)').text(formData.moq);
            row.find('td:nth-child(18)').text(formData.price_usd);
            const total = (parseFloat(formData.moq) || 0) * (parseFloat(formData.price_usd) || 0);
            row.find('td:nth-child(19)').text(total.toFixed(2));
            row.find('td:nth-child(20)').text(formData.comments);
            if (formData.product_image_file) {
                const imageUrl = URL.createObjectURL(formData.product_image_file);
                row.find('td:nth-child(2) img').attr('src', imageUrl).css({
                    'width': '100px',
                    'height': '70px',
                    'object-fit': 'contain'
                });
            }
        }

        function createTableRow(index, formData) {
            const newRow = $('<tr>').append(`<td>${index}</td>`);
            
            // Image cell with fixed dimensions
            const imageUrl = formData.product_image_file ? 
                `<img src="${URL.createObjectURL(formData.product_image_file)}" alt="Product Image" style="width:100px; height:70px; object-fit:contain;">` : 
                'No image';
            newRow.append(`<td>${imageUrl}</td>`);
            
            // Other cells
            newRow.append(`<td>${formData.item_name}</td>`);
            newRow.append(`<td>${formData.description}</td>`);
            newRow.append(`<td>${formData.assembly}</td>`);
            newRow.append(`<td>${formData.item_h}</td>`);
            newRow.append(`<td>${formData.item_w}</td>`);
            newRow.append(`<td>${formData.item_d}</td>`);
            newRow.append(`<td>${formData.box_h}</td>`);
            newRow.append(`<td>${formData.box_w}</td>`);
            newRow.append(`<td>${formData.box_d}</td>`);
            newRow.append(`<td>${formData.cbm}</td>`);
            newRow.append(`<td>${formData.wood_marble_type.join(', ')}</td>`);
            newRow.append(`<td>${formData.no_of_packet}</td>`);
            newRow.append(`<td>${formData.iron_gauge}</td>`);
            newRow.append(`<td>${formData.mdf_finish}</td>`);
            newRow.append(`<td>${formData.moq}</td>`);
            newRow.append(`<td>${formData.price_usd}</td>`);
            const total = (parseFloat(formData.moq) || 0) * (parseFloat(formData.price_usd) || 0);
            newRow.append(`<td>${total.toFixed(2)}</td>`);
            newRow.append(`<td>${formData.comments}</td>`);
            
            // Action buttons in a single cell, side by side
            newRow.append(`
                <td class="d-flex pt-4">
                    <button type="button" class="btn bg-gradient-primary text-white btn-sm rounded-0 me-1 edit-product">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                    <button type="button" class="btn bg-gradient-primary text-white btn-sm rounded-0 remove-product">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            `);
            
            return newRow;
        }

        function updateSerialNumbers() {
            $('#productTable tbody tr').each(function(index) {
                $(this).find('td:first').text(index + 1);
            });
        }

        function getRowData(row) {
            return {
                item_name: row.find('td:nth-child(3)').text(),
                description: row.find('td:nth-child(4)').text(),
                assembly: row.find('td:nth-child(5)').text(),
                item_h: row.find('td:nth-child(6)').text(),
                item_w: row.find('td:nth-child(7)').text(),
                item_d: row.find('td:nth-child(8)').text(),
                box_h: row.find('td:nth-child(9)').text(),
                box_w: row.find('td:nth-child(10)').text(),
                box_d: row.find('td:nth-child(11)').text(),
                cbm: row.find('td:nth-child(12)').text(),
                wood_marble_type: row.find('td:nth-child(13)').text().split(', '),
                no_of_packet: row.find('td:nth-child(14)').text(),
                iron_gauge: row.find('td:nth-child(15)').text(),
                mdf_finish: row.find('td:nth-child(16)').text(),
                moq: row.find('td:nth-child(17)').text(),
                price_usd: row.find('td:nth-child(18)').text(),
                comments: row.find('td:nth-child(20)').text(),
            };
        }

        function populateModal(data) {
            $('#item_name').val(data.item_name);
            $('#description').val(data.description);
            $('#assembly').val(data.assembly);
            $('#item_h').val(data.item_h);
            $('#item_w').val(data.item_w);
            $('#item_d').val(data.item_d);
            $('#box_h').val(data.box_h);
            $('#box_w').val(data.box_w);
            $('#box_d').val(data.box_d);
            $('#cbm').val(data.cbm);
            $('#wood_marble_type').val(data.wood_marble_type);
            $('#no_of_packet').val(data.no_of_packet);
            $('#iron_gauge').val(data.iron_gauge);
            $('#mdf_finish').val(data.mdf_finish);
            $('#moq').val(data.moq);
            $('#price_usd').val(data.price_usd);
            $('#comments').val(data.comments);
        }

        // Handle form submission
        $('#quotationForm').on('submit', function(e) {
            e.preventDefault();
            
            // Collect all table data
            const products = [];
            $('#productTable tbody tr').each(function() {
                products.push({
                    item_name: $(this).find('td:nth-child(3)').text(),
                    description: $(this).find('td:nth-child(4)').text(),
                    assembly: $(this).find('td:nth-child(5)').text(),
                    item_h: $(this).find('td:nth-child(6)').text(),
                    item_w: $(this).find('td:nth-child(7)').text(),
                    item_d: $(this).find('td:nth-child(8)').text(),
                    box_h: $(this).find('td:nth-child(9)').text(),
                    box_w: $(this).find('td:nth-child(10)').text(),
                    box_d: $(this).find('td:nth-child(11)').text(),
                    cbm: $(this).find('td:nth-child(12)').text(),
                    wood_marble_type: $(this).find('td:nth-child(13)').text(),
                    no_of_packet: $(this).find('td:nth-child(14)').text(),
                    iron_gauge: $(this).find('td:nth-child(15)').text(),
                    mdf_finish: $(this).find('td:nth-child(16)').text(),
                    moq: $(this).find('td:nth-child(17)').text(),
                    price_usd: $(this).find('td:nth-child(18)').text(),
                    total: $(this).find('td:nth-child(19)').text(),
                    comments: $(this).find('td:nth-child(20)').text(),
                });
            });
            
            // Store in hidden input as JSON
            $('#productsData').val(JSON.stringify(products));
            
            // Now submit the form
            this.submit();
        });
    });
</script>
@endpush