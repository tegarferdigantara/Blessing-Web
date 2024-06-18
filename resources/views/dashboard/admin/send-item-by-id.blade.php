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
                            <h3 class="card-title">Item Sender</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('send-item-by-id-post') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nickname</label>
                                    <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                                        id="nickname" value="{{ old('nickname') }}"" placeholder="Nickname"
                                        name="nickname">
                                    @error('nickname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Attribute</label>
                                    <input type="text" class="form-control @error('attribute') is-invalid @enderror"
                                        id="attribute" value="{{ old('attribute') }}"" placeholder="Attribute"
                                        name="attribute">
                                    @error('attribute')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Item</label>
                                    <input type="text" class="form-control @error('item_code') is-invalid @enderror"
                                        id="exampleInput1" value="{{ old('item_code') }}" placeholder="Kode Item"
                                        name="item_code">
                                    @error('item_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stack</label>
                                    <input type="text" class="form-control @error('stack') is-invalid @enderror"
                                        id="stack" value="{{ old('stack') }}"" placeholder="Stack" name="stack">
                                    @error('stack')
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
                    <!-- /.card -->
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
