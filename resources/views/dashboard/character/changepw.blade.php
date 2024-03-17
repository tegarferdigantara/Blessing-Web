@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Password</h4>
                            <p class="card-description">
                               Enter your current password to proceed with changing your password.
                            </p>
                            <form class="forms-sample" action="{{route('changepassword')}}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="oldpassword">Old Password</label>
                                <input type="password" name="current_password" class="form-control" id="oldpassword" placeholder="Old Password">
                              </div>
                              <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="password" placeholder="New Password">
                                @error('new_password') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="confirmpassword">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" @error('new_password') is-invalid @enderror" class="form-control" id="confirmpassword" placeholder="Confirm New Password">
                              </div>
                              <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"
                                    data-size="normal"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                              <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
            @if (session()->has('status'))
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
                    title: "{{ session('status') }}"
                });
            @elseif (session()->has('error'))
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
                    title: "{{ session('error') }}"
                });
            @endif
        });
    </script>
@endsection
