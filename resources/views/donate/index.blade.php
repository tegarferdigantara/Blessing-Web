@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Price List</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    @php
                        // YOUR WHATSAPP NUMBER HERE
                        $number_phone = "6289623232323";

                        //EDIT DONATE VALUE IN STORAGE/TOPUP
                        $amount_rps = storage_path('topup/amount_rps.txt');
                        $idr = storage_path('topup/idr.txt');
                        $dollar = storage_path('topup/dollar.txt');
                        $php = storage_path('topup/php.txt');

                        $lines_rps = file($amount_rps, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                        $lines_idr = file($idr, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                        $lines_dollar = file($dollar, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                        $lines_php = file($php, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    @endphp
                    <thead>
                    <tr>
                      <th>Amount</th>
                      <th>IDR</th>
                      <th>$</th>
                      <th>PHP</th>
                      <th>#</th>
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
                                {{ number_format($lines_php[$index], 0, '.', '.') }}
                            </td>
                            <td>
                                <a href="https://wa.me/{{ $number_phone }}?text=Hello%2C%20I%20want%20to%20buy%20{{str_replace('_', ' ', config('app.name'))}}%20point%20with%20amount%20{{ number_format($rps, 0, '.', '.') }}%20%2F%20IDR%20Rp{{ number_format($lines_idr[$index], 0, '.', '.') }}%20%2F%20USD%20%24{{ number_format($lines_dollar[$index], 0, '.', '.') }}%20%2F%20PHP%20{{ number_format($lines_php[$index], 0, '.', '.') }}" target="_blank"
                                    class="btn btn-success btn-rounded btn-fw btn-sm">Buy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div> --}}
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
@endsection
