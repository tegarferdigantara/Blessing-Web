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
                                        @foreach ($lines_rps as $index => $rps)
                                            <tr>
                                                <td>
                                                    {{ number_format($rps, 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    {{ number_format($lines_idr[$index], 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    {{ number_format($lines_dollar[$index], 0, '.', '.') }}
                                                </td>
                                                <td>
                                                    <a href="https://wa.me/62895371969966?text=Hello%2C%20I%20want%20to%20buy%20azura%20rohan%20point%20with%20amount%20{{ number_format($rps, 0, '.', '.') }}%20%2F%20IDR%20Rp{{ number_format($lines_idr[$index], 0, '.', '.') }}%20%2F%20USD%20%24{{ number_format($lines_dollar[$index], 0, '.', '.') }}" target="_blank"
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
