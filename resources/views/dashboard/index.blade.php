@extends('template.index')

@section('content')
    <div class="row">
        @include('dashboard.components.card-values', ['name' => 'Contacts', 'quantity' => count($contacts), 'icon' => 'ti ti-users', 'color' => 'primary'])
        @include('dashboard.components.card-values', ['name' => 'Users', 'quantity' => $qtdUsers, 'icon' => 'ti ti-currency-dollar', 'color' => 'danger'])
        @include('dashboard.components.card-values', ['name' => 'Sales', 'quantity' => '$1.000', 'icon' => 'ti ti-credit-card', 'color' => 'success'])

        {{-- Tables contacts --}}
        @include('dashboard.components.table-contacts')   
    </div>
@endsection
@push('script-js')

@endpush
