<div class="col-lg-12 col-md-12">
    <div class="card table-card">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h5 class="mb-0">Last 5 contacts</h5><a href="{{ route('admin.contact.index') }}" class="btn btn-sm btn-link-primary">View all</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts->take(5) as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
