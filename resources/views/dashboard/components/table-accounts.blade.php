<div class="col-lg-6 col-md-12">
    <div class="card table-card">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h5 class="mb-0">Últimas contas lançadas</h5><a href="{{ route('admin-accounts-index', ['month' => $month, 'year' => $year]) }}" class="btn btn-sm btn-link-primary">Visualizar todas</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>vencimento</th>
                            <th>Status</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts->take(5) as $account)
                            <tr>
                                <td>{{ $account->name }}</td>
                                <td>{{ !empty($account->due_date) ? Carbon\Carbon::parse($account->due_date)->format('d/m/Y') : '' }}</td>
                                <td>
                                    @switch($account->type)
                                        @case(1)
                                            <span class='badge text-bg-success'>Entrada</span>
                                            @break
                                        @case(2)
                                            <span class='badge text-bg-warning'>Saída</span>
                                            @break
                                    @endswitch
                                </td>
                                <td>{{ convertForReal($account->amount) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
