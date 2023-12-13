{{-- @extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Item Mall </h3>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
            {{ session('failed') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        @include('dashboard.mall.partials.info')
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Items</h4>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="text-muted mb-1">Item</p>
                        <p class="text-muted mb-1">Actions</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($TCategoryItems->count())
                                @foreach ($TCategoryItems as $tci)
                                    <div class="preview-list">
                                        <form action="/itemmall" method="post">
                                            @csrf
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-primary">
                                                        <img src="assets/pic/{{ $tci->img }}" alt="logo"
                                                            width="30px" height="30px" />
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">{{ $tci->name }}&nbsp;<p
                                                                class="text-muted mb-1 btn btn-inverse-dark btn-sm d-inline">
                                                                {{ $tci->category }}</p>
                                                        </h6>
                                                        <p class="text-muted mb-1">{{ $tci->description }}</p>
                                                        <input type="hidden" value="{{ $tci->id }}" name="itemID">
                                                        <div class="d-flex flex-row">
                                                            <select name="qty" id="qty"
                                                                class="w-auto form-control form-control-sm mr-1">
                                                                @for ($i = 1; $i <= 25; $i++)
                                                                    <option value=" {{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                            <p class="text-light mb-1 btn btn-success">Price:
                                                                {{ number_format($tci->price, 0, '.', '.') }}</p>
                                                        </div>

                                                    </div>
                                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                        <button type="submit" name="purchase"
                                                            class="btn btn-inverse-primary btn-md d-block mb-1">Purchase</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                @endforeach
                            @else
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <p class="text-light mb-1 text-center">Item Not Found</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $TCategoryItems->links() }}

    </div>
@endsection --}}

@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border border-0 font-weight-bold">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <div class="row">
                {{-- @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif --}}
                <div class="col-12 mb-3">
                    <h3 class="font-weight-bold mb-3">Category</h3>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#allItems">All Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#armor">Armor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#weapon">Weapon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrolls">Scrolls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#growth">Growth</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#etc">ETC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mounts">Mounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#talisman">Talisman</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="row">
                        @if ($TCategoryItems->count())
                            @foreach ($TCategoryItems as $tci)
                                <div class="col-10 col-sm-3 col-md-3  col-xl-3 grid-margin stretch-card">
                                    <div class="card border border-info">
                                        <div class="card-body text-center">
                                            <form action="/itemmall" method="POST">
                                                @csrf
                                                <h4 class="card-title">{{ $tci->name }}</h4>
                                                <img src="assets/pic/{{ $tci->img }}" class="img-fluid mb-2"
                                                    width="60px" alt="{{ $tci->img }}">
                                                <p class="text-active font-weight-bold">Category: <span
                                                        class="font-weight-bold text-danger">{{ $tci->category }}</span></p>
                                                <h5 class="text-active font-weight-bold">
                                                    Price: {{ number_format($tci->price, 0, '.', '.') }} Rps</h5>
                                                <p>{{ $tci->description }}</p>
                                                <input type="hidden" value="{{ $tci->id }}" name="itemID">
                                                <div class="col-auto">
                                                    <p class="mb-0 text-muted">Qty:
                                                        <select style="width: 70px; border-radius: 10px;"
                                                            class="form-select  border border-info text-center"
                                                            aria-label="#" name="qty" id="qty">
                                                            @for ($i = 1; $i <= 25; $i++)
                                                                <option value=" {{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </p>
                                                    <button class="btn btn-primary btn-sm mt-2 font-weight-bold"> Buy
                                                        Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4>Item not found</h4>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $TCategoryItems->links() }}
                    </div>
                </div>
                @include('partials.footer')
            </div>
        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session()->has('success'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "{{ session('success') }}"
                });
            @elseif (session()->has('failed'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: "{{ session('failed') }}"
                });
            @endif
        });
    </script>

@endsection
