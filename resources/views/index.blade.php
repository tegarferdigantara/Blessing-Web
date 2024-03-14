@extends('layouts.main')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session()->has('logout'))
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
                    title: "{{ session('logout') }}"
                });
            @elseif (session()->has('success'))
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
            @endif
        });
    </script>
    <div class="main-panel">
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border border-0 font-weight-bold">
                    @guest
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                    @else
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    @endguest
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card-people mt-0 ">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="images/dashboard/banner.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="images/dashboard/banner2.png"
                                                alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="weather-info">
                                    <div class="d-flex">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent mt-3">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card bg-dark">
                                        <div class="card-body text-white">
                                            <p class="mb-3 font-weight-bold">Server Status</p>
                                            @if ($ServerInfo)
                                                {!! Request::is('dashboard', 'index')
                                                    ? '<p class="fs-30 mb-3 text-danger font-weight-bold">Maintenance</p><p class="font-weight-bold">Updating System</p>'
                                                    : '' !!}
                                            @else
                                                <p class="fs-30 mb-3 text-success font-weight-bold">Online</p>
                                                <p class="font-weight-bold">Active Service</p>
                                            @endif



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card bg-dark">
                                        <div class="card-body text-white">
                                            <p class="mb-3 font-weight-bold ">Accounts </p>
                                            <p class="fs-30 mb-3 text-warning font-weight-bold">
                                                {{ $User }}</p>
                                            <p class="font-weight-bold">Total Account Registered</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 transparent">
                                    <div class="card bg-dark">
                                        <div class="card-body text-white">
                                            <p class="mb-2 font-weight-bold">Guild</p>
                                            <p class="fs-30 mb-2 text-success text-warning font-weight-bold ">
                                                {{ $TNGuild->count() }}
                                            </p>
                                            <p class="font-weight-bold">Total Guild Registered</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6  transparent">
                                    <div class="card bg-dark">
                                        <div class="card-body text-white">
                                            <p class="mb-2 font-weight-bold ">Township Battle Start</p>
                                            <p class="fs-30 mb-2 text-info font-weight-bold">
                                                9.30 PM
                                            </p>
                                            <p class="font-weight-bold">Sunday - Game Time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <div id="detailedReports"
                                        class="carousel slide detailed-report-carousel position-static pt-2"
                                        data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div
                                                        class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title ">Server Information</p>
                                                            <h3 class="text-primary font-weight-bold">Azura
                                                                Rohan</h3>
                                                            <h3 class="font-weight-bold mb-xl-4 text-success">
                                                                Server: ASIA</h3>
                                                            <p class="mb-2 mb-xl-0">R.O.H.A.N. : AZURA is a
                                                                free-to-play MMORPG, full of Player Vs Player
                                                                Action in an online world.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <ul class="mt-3" style="list-style: none;">
                                                                    <li class="font-weight-bold text-danger">PVP 95% PVE 5%
                                                                    </li>
                                                                    <li class="font-weight-bold">Hero III</li>
                                                                    <li class="font-weight-bold">Instan Level 115</li>
                                                                    <li class="font-weight-bold">Max Reinforcement: 15</li>
                                                                    <li class="font-weight-bold">Farm to Win</li>
                                                                    <li class="font-weight-bold">Self Buff System </li>
                                                                    <li class="font-weight-bold">Balance Damage</li>
                                                                    <a href="" type="button"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#information-server"
                                                                        class="font-weight-bold"
                                                                        style="text-decoration: none;"> More
                                                                        Information..</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <h4 class="font-weight-bold">Our Social Media
                                                                </h4>
                                                                <li style="list-style: none;" class="mt-1">
                                                                    <a href="https://www.facebook.com/azurarohan"
                                                                        class="btn btn-social-icon-text btn-facebook" target="_blank"><i
                                                                            class="ti-facebook"></i>Facebook
                                                                        Fanspage</a>
                                                                </li>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Top Player</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Ingame Name</th>
                                                    <th>Level</th>
                                                    <th>Kill</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($TOP15)
                                                    @foreach ($TOP15 as $top)
                                                        <tr>
                                                            <td class="font-weight-bold">
                                                                @if ($top->class == 197133)
                                                                    <img src="../images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197134)
                                                                    <img src="../images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197135)
                                                                    <img src="../images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196993)
                                                                    <img src="../images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196994)
                                                                    <img src="../images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196995)
                                                                    <img src="../images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196869)
                                                                    <img src="../images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196870)
                                                                    <img src="../images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196871)
                                                                    <img src="../images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197257)
                                                                    <img src="../images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197258)
                                                                    <img src="../images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197259)
                                                                    <img src="../images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198809)
                                                                    <img src="../images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198810)
                                                                    <img src="../images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198811)
                                                                    <img src="../images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197777)
                                                                    <img src="../images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197778)
                                                                    <img src="../images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197779)
                                                                    <img src="../images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198685)
                                                                    <img src="../images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198686)
                                                                    <img src="../images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198687)
                                                                    <img src="../images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197653)
                                                                    <img src="../images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197654)
                                                                    <img src="../images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197655)
                                                                    <img src="../images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229561)
                                                                    <img src="../images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229562)
                                                                    <img src="../images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229563)
                                                                    <img src="../images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229437)
                                                                    <img src="../images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229438)
                                                                    <img src="../images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229439)
                                                                    <img src="../images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204969)
                                                                    <img src="../images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204970)
                                                                    <img src="../images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204971)
                                                                    <img src="../images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204845)
                                                                    <img src="../images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204846)
                                                                    <img src="../images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204847)
                                                                    <img src="../images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200865)
                                                                    <img src="../images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200866)
                                                                    <img src="../images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200867)
                                                                    <img src="../images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200741)
                                                                    <img src="../images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200742)
                                                                    <img src="../images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200743)
                                                                    <img src="../images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213045)
                                                                    <img src="../images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213046)
                                                                    <img src="../images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213047)
                                                                    <img src="../images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @endif
                                                                <span class="pl-2">{{ $top->name }}</span>
                                                            </td>
                                                            <td class="font-weight-bold"> {{ $top->lvl }} </td>
                                                            <td class="font-weight-bold"> {{ $top->kill_count }} </td>
                                                            <td class="font-weight-medium">
                                                                @if ($top->sts == 1)
                                                                    <div class="badge badge-success">Online</div>
                                                                @else
                                                                    <div class="badge badge-danger">Offline</div>
                                                                @endif

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <h1>Records not found</h1>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Notifications</p>
                                    <ul class="icon-data-list">
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-success">Enters</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-success">Enters</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-danger">Leaves</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-success">Enters</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-danger">Leaves</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-success">Enters</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="mb-0 font-weight-bold">
                                                        <span class="text-info mb-1 font-weight-bold">[GM]
                                                            Azura</span>
                                                        has
                                                        <span class="font-weight-bold badge badge-danger">Leaves</span>
                                                        the Game!
                                                    </p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    @include('partials.footer')
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    @endsection
