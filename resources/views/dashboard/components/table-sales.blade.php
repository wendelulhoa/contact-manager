<div class="col-lg-6 col-md-12">
    <div class="card table-card">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h5 class="mb-0">Últimas vendas lançadas</h5><a href="{{ route('admin-sales-index', ['month' => $month, 'year' => $year]) }}" class="btn btn-sm btn-link-primary">Visualizar todas</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Pago?</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales->take(5) as $sale)
                            <tr>
                                <td>{{ $sale->codeorder }}</td>
                                <td>{{ $sale->name }}</td>
                                <td>
                                    {{ $sale->paid ? 'Sim' : 'Não' }}
                                </td>
                                <td>{{ convertForReal($sale->amount) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
