@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Top Up</h4>
                            <p class="card-description">
                                Seamless top-up for instant gaming upgrades—your shortcut to an enriched experience.
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    @php
                                        $amount_rps = storage_path('topup/amount_rps.txt');
                                        $idr = storage_path('topup/idr.txt');
                                        $dollar = storage_path('topup/dollar.txt');

                                        // Membaca setiap baris dari file dan menampilkannya
                                        $lines_rps = file($amount_rps, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                        $lines_idr = file($idr, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                        $lines_dollar = file($dollar, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                                    @endphp
                                    <thead>
                                        <tr>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                IDR
                                            </th>
                                            <th>
                                                $
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lines_rps as $rps)
                                        <tr>
                                            
                                                <td>
                                                    {{ $rps }}
                                                </td>
                                            @endforeach
                                            @foreach ($lines_idr as $idr)
                                                <td>
                                                    {{ number_format($idr, 0, '.', '.') }}
                                                </td>
                                            @endforeach
                                            @foreach ($lines_dollar as $dollar)
                                                <td>
                                                    {{ number_format($dollar, 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    <a href="#" target="_blank"
                                                        class="btn btn-success btn-rounded btn-fw btn-sm">Buy</a>
                                                </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
    </div>
@endsection
