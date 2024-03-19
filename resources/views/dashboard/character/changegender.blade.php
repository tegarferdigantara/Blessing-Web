@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Gender</h4>
                            <p class="card-description">
                                To update your character's gender, please select the character whose gender you wish to change.
                            </p>
                            <form class="forms-sample" action="{{ route('changegender') }}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="character">Select the Character <b class="text-danger">(Logout of your account in the game before changing gender!)</b></label>
                                <select class="form-control" id="character" name="character">
                                    @if (count($characterName) === 0)
                                        <option value="" disabled selected>Please create a new character first!</option>
                                    @else
                                    @foreach ($characterName as $name)
                                    {{-- {{ ddd($name) }} --}}
                                        <option value="{{ $name->name }}">{{ $name->name }}
                                            @if (in_array($name->ctype_id, [197133, 197134, 197135, 196869, 196870, 196871, 198685, 198686, 198687, 197653, 197654, 197655, 229437, 229438, 229439, 204845, 204846, 204847, 200741, 200742, 200743, 213045, 213046, 213047]))
                                            (F)
                                            @elseif (in_array($name->ctype_id, [196993, 196994, 196995, 197257, 197258, 197259, 198809, 198810, 198811, 197777, 197778, 197779, 229561, 229562, 229563, 204969, 204970, 204971, 200865, 200866, 200867]))
                                            (M)
                                            @endif
                                        </option>
                                    @endforeach
                                    @endif
                                </select>
                              </div>
                              <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"
                                    data-size="normal"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Change For {{ $price }} Rps</button>
                            </form>
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
