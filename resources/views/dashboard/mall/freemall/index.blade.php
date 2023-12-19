@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border border-0 font-weight-bold">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Freemall</li>
                </ol>
            </nav>
            <div class="row">
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
                                            <form action="/freemall" method="POST">
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
