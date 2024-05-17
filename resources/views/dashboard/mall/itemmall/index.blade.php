@extends('layouts.main')

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">

                <div class="row">
                    @if ($TCategoryItems->count())
                        @foreach ($TCategoryItems as $tci)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0 text-right">
                                        {{ $tci->category }}
                                    </div>

                                    <form action="{{ route('itemmall-post') }}" method="POST">
                                        @csrf
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>{{ $tci->name }}</b></h2>
                                                    <p class="text-muted text-sm">{{ $tci->description }}</p>
                                                    <input type="hidden" value="{{ $tci->id }}" name="itemID">
                                                    <p class="mb-0 text-muted">Qty:
                                                        <select style="width: 50px; border-radius: 10px;"
                                                            class="form-select  border border-info text-center"
                                                            aria-label="#" name="qty" id="qty">
                                                            @for ($i = 1; $i <= 25; $i++)
                                                                <option value=" {{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </p>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="images/item/{{ $tci->img }}" width="128px"
                                                        alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a class="btn btn-sm bg-teal">
                                                    <i class="fas fa-money-bill-wave"></i>
                                                    {{ number_format($tci->price, 0, '.', '.') }} Rps
                                                </a>
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fas fa-shopping-cart"></i> Buy
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4>Item not found</h4>
                    @endif

                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $TCategoryItems->links() }}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

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
