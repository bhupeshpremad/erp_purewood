$(document).ready(function() {
    $('input[placeholder="Search Name, Email or Phone"]').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('table tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $('.approve-btn').on('click', function() {
        var leadName = $(this).data('lead-name');
        var toastLiveExample = document.getElementById('liveToast');
        var toastBody = toastLiveExample.querySelector('.toast-body');
        toastBody.textContent = 'Approved Lead: ' + leadName;
        var toast = new bootstrap.Toast(toastLiveExample);
        toast.show();
    });

    $('.disable-btn').on('click', function() {
        var leadId = $(this).data('lead-id');
        var leadName = $(this).data('lead-name');
        var button = $(this);

        button.prop('disabled', true).removeClass('btn-danger').addClass('btn-secondary').text('Disabled');

        console.log('Lead ' + leadName + ' with ID ' + leadId + ' has been disabled.');
    });

    $('.view-status-btn').on('click', function() {
        var modalId = $(this).data('bs-target');
        $(modalId).modal('show');
    });
});

// Add Quataion Product function
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
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn bg-gradient-primary text-white btn-sm rounded-0 remove-product">
                    <i class="fas fa-trash"></i>
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


// View Quotation function
$(document).ready(function() {
    // Initialize DataTable with pagination and search
    // $('.quotations-table').DataTable({
    //     responsive: true,
    //     dom: '<"top"f>rt<"bottom"lp><"clear">',
    //     pageLength: 20,
    //     lengthMenu: [[20, 50, 100, -1], [20, 50, 100, "All"]],
    //     initComplete: function() {
    //         // Move search inputs to custom search form
    //         $('.dataTables_filter').hide();
    //         $('.search-input').on('keyup', function() {
    //             $('.quotations-table').DataTable().search($(this).val()).draw();
    //         });
    //     }
    // });

    // Export Excel button
    $('.export-excel-row').on('click', function() {
        showToast('Excel export initiated successfully for this row');
    });

    // Export PDF button
    $('.export-pdf-row').on('click', function() {
        showToast('PDF export initiated successfully for this row');
    });

    // Send Email button
    $('#sendEmailBtn').on('click', function() {
        const email = $('#recipient_email').val();
        if (!email) {
            alert('Please enter recipient email');
            return;
        }
        $('#shareQuotationModal').modal('hide');
        showToast('Quotation shared successfully with ' + email);
    });

    // Export options handler in the modal
    $('.export-option').on('click', function() {
        const type = $(this).data('type');

        if (type.includes('date')) {
            const startDate = $('#exportStartDate').val();
            const endDate = $('#exportEndDate').val();

            if (!startDate || !endDate) {
                alert('Please select both start and end dates');
                return;
            }

            console.log(`Exporting from ${startDate} to ${endDate} as ${type.split('-')[1]}`);
        } else {
            console.log(`Exporting all data as ${type}`);
        }

        $('#exportModal').modal('hide');
        showToast(`Exporting as ${type}`);
    });

    // Toast notification function
    const toastNotification = new bootstrap.Toast(document.getElementById('toastNotification'));
    function showToast(message) {
        $('#toastMessage').text(message);
        toastNotification.show();
    }
});