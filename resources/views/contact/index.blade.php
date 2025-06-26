@extends('template.index')

@section('content')
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body py-0">
                    <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a class="nav-link active" id="contacts-tab" data-bs-toggle="tab" href="#contacts" role="tab"
                                aria-selected="false" tabindex="-1">
                                <i class="ti ti-users me-2"></i> Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xxl-12">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            @include('contact.components.table-contact')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script-js')
    @include('contact.index-js')
@endpush