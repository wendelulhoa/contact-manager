@extends('template.index')

@section('content')
    <div class="row">
        @include('dashboard.components.card-values', ['name' => 'Contacts', 'quantity' => 2, 'icon' => 'ti ti-users', 'color' => 'primary'])
        @include('dashboard.components.card-values', ['name' => 'Clients', 'quantity' => 2, 'icon' => 'ti ti-currency-dollar', 'color' => 'danger'])
        @include('dashboard.components.card-values', ['name' => 'Sales', 'quantity' => '$1.000', 'icon' => 'ti ti-credit-card', 'color' => 'success'])

    </div>
@endsection
@push('script-js')

@endpush
