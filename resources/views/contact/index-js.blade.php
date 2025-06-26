<script>
    // Table Contacts
    var tableContacts = null;

    $(function() {
        // Initialize datatables
        initDatatables(1);
    });

    // Delete contact
    function deleteContact(id) {
        var action = () => {
            showPreloader('Excluding client...');

            $.ajax({
                url: "{{ Route('admin.contact.delete', ['contact' => ':newId']) }}".replace(':newId', id),
                method: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    toastr.success("Deleted successfully.")
                    // reload
                    reloadDatatables()
                    hidePreloader();
                },
                error: function() {
                    toastr.warning('Oops! An error occurred.');
                    hidePreloader();
                }
            });
        };

        sweetAlert2(`Are you sure you want to delete?`, action)
    }

    // Initialize datatables
    function initDatatables() {
        tableContacts = $('#table-contacts').DataTable({
            processing: true,
            serverSide: false,
            "ajax": {
                url: `{{ Route('admin.contact.getcontactsbyuserdatatable') }}`,
                "type": "POST",
                "headers": {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function() {
                },
                error: function() {
                    toastr.warning("Oops! An error occurred.");
                }
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone', 
                createdCell: function(td, cellData, rowData, row, col) {
                    $(td).addClass('text-center');
                }},
                {data: 'email', name: 'email', 
                createdCell: function(td, cellData, rowData, row, col) {
                    $(td).addClass('text-center');
                }},
                {data: 'actions', name: 'actions',
                createdCell: function(td, cellData, rowData, row, col) {
                    $(td).addClass('text-center');
                }},
            ],
            order: [[1, "desc"]]
        });
    }

    // Reload datatables
    function reloadDatatables() {
        tableContacts.ajax.reload(null, false);
    }
</script>