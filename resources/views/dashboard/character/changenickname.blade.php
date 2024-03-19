@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Nickname</h4>
                            <p class="card-description">
                              To change your nickname, please select the character for which you want to update the nickname.
                            </p>
                            <form class="forms-sample" action="{{ route('changenickname') }}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="nickname">Select the Character Name <b class="text-danger">(Logout of your account in the game before changing nickname!)</b></label>
                                <select class="form-control" id="nickname" name="nickname">
                                    @if (count($characterName) === 0)
                                        <option value="" disabled selected>Please create a new character first!</option>
                                    @else
                                    @foreach ($characterName as $name)
                                        <option value="{{ $name->name }}">{{ $name->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="newNickname">New Character Name</label>
                                <input type="text" class="form-control @error('newNickname') is-invalid @enderror" id="newNickname" name="newNickname" placeholder="Character Name..">
                                @error('newNickname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
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
