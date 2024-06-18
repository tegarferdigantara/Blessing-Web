@extends('layouts.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Rps Sender</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('send-rps-post') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Login ID</label>
                                    <input type="text" class="form-control @error('login_id') is-invalid @enderror"
                                        id="exampleInput1" value="{{ old('login_id') }}" placeholder="Login ID"
                                        name="login_id">
                                    @error('login_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Amount RPS</label>
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror"
                                        id="amount" value="{{ old('amount') }}"" placeholder="Amount" name="amount">
                                    @error('amount')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session()->has('success'))
                toastr.success('{{ session('success') }}');
            @elseif (session()->has('failed'))
                toastr.error('{{ session('failed') }}');
            @endif
        });
    </script>
@endsection
