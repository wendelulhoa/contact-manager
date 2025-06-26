<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="text-end">
                <a href="{{ route('admin.contact.create') }}"
                    class="btn btn-primary d-inline-flex align-items-center gap-2">
                    <i class="ti ti-plus f-18"></i> Add
                </a>
            </div>
            <div class="dt-responsive table-responsive">
                <table id="table-contacts" class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
