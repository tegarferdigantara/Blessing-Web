{{-- @extends('layouts.main')

@section('content')
    @if (session()->has('logout'))
        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            {{ session('logout') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="page-header">
        <h3 class="page-title"> Server Information </h3>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Features</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi mdi-settings-box"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">HERO</h5>
                                            <h5 class="preview-subject">MAX LEVEL</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">IV</h5>
                                            <h5 class="text-muted">115 + HLV 50</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi mdi-sword"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">TSB SYSTEM</h5>
                                            <h5 class="preview-subject">POWER ARENA</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi mdi-cart"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">ITEM MALL</h5>
                                            <h5 class="preview-subject">FREE MALL</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi mdi-shield"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">FORGING SYSTEM</h5>
                                            <h5 class="preview-subject">TRANSCENDED SYSTEM</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi mdi-calendar-text"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">DAILY EVENTS</h5>
                                            <h5 class="preview-subject">LOGIN POINTS</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">System</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <h5 class="preview-subject mt-3">
                                    <i class="mdi mdi mdi-brightness-5 text-primary mr-1"></i> PVE GAMEPLAY
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-sword text-primary mr-1"></i> BALANCE PVP
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-trophy text-primary mr-2"></i>PLAY TO WIN
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi mdi-ticket-confirmation text-primary mr-2"></i>AUTO CONSUME IP
                                    TICKET
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi-google-controller text-primary mr-2"></i>PLAYABLE
                                    EVERY CLASS
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i class="mdi mdi mdi-tune text-primary mr-2"></i>NO
                                    OVERPOWER ITEMS
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>UPGRADED ACCESSORIES
                                    SYSTEM
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>QUEST REWARD IN
                                    NEWBIE'S HELPER
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>BOSS HUNTING FOR
                                    TICKET UPGRADE
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Rate</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <h5 class="preview-subject mt-3">
                                    <i class="mdi mdi mdi-arrow-up-bold-circle text-danger mr-1"></i> EXP: x10
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-cash-100 text-danger mr-1"></i> CRONES: x10
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-signal text-danger mr-1"></i> DROP RATE: x30
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> FORGE RATE:
                                    <p class="ml-5 mt-2 mb-0"> - RARE: 60% | - UNIQUE: 40%</p>
                                    <p class="ml-5"> - ANCIENT: 20%</p>
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> ACCESSORIES RATE:
                                    <p class="ml-5 mt-2 mb-0"> - 1-5: 60% | - 14: 10%</p>
                                    <p class="ml-5 mb-0"> - 6-8: 90% | - 15-17: 1% </p>
                                    <p class="ml-5"> - 9-13: 80% | -18: 0.3%</p>
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> REINFORCEMENT RATE:
                                    <p class="ml-5 mt-2 mb-0"> - 1-2: 100% | - 12-13: 20%</p>
                                    <p class="ml-5 mb-0"> - 3-5: 90% | - 14: 10% </p>
                                    <p class="ml-5"> - 6-11: 80% | - 15-17: 1%</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

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
        @endif
    });
</script>
    <div class="main-panel">
        <div class="content-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border border-0 font-weight-bold">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                                {!! Request::is('dashboard', 'home')
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
                                                8.30 PM
                                            </p>
                                            <p class="font-weight-bold">Sunday - Server Time</p>
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
                                                                Server : ASIA</h3>
                                                            <p class="mb-2 mb-xl-0">R.O.H.A.N. : AZURA is a
                                                                free-to-play MMORPG, full of Player Vs. Player
                                                                Action in an online world.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <ul class="mt-3" style="list-style: none;">
                                                                    <li class="font-weight-bold text-danger">
                                                                        PURE PVP SYSTEM</li>
                                                                    <li class="font-weight-bold">Hero II</li>
                                                                    <li class="font-weight-bold">Instan Level
                                                                        110</li>
                                                                    <li class="font-weight-bold">Auto Consumed
                                                                        IP</li>
                                                                    <li class="font-weight-bold">Daily Boss
                                                                        Summond </li>
                                                                    <li class="font-weight-bold">Crone / IP /
                                                                        Badge </li>
                                                                    <li class="font-weight-bold">Power Arena
                                                                    </li>
                                                                    <li class="font-weight-bold">Balance Demage
                                                                    </li>
                                                                    <a href="" type="button"
                                                                        data-bs-toggle="modal" data-bs-target="#detailser"
                                                                        class="font-weight-bold"
                                                                        style="text-decoration: none;"> More
                                                                        Information Here Click Here!</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <h4 class="font-weight-bold">Our Social Media
                                                                </h4>
                                                                <li style="list-style: none;" class="mt-1">
                                                                    <button type="button"
                                                                        class="btn btn-social-icon-text btn-facebook"><i
                                                                            class="ti-facebook"></i>Facebook
                                                                        FP</button>
                                                                </li>
                                                                <li style="list-style: none;" class="mt-1">
                                                                    <button type="button"
                                                                        class="btn btn-social-icon-text btn-facebook"><i
                                                                            class="ti-facebook"></i>Facebook
                                                                        Group</button>
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
                                                    <th>Kill</th>
                                                    <th>Level</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($TOP15)
                                                    @foreach ($TOP15 as $top)
                                                        <tr>
                                                            <td class="font-weight-bold">
                                                                @if ($top->class == 197133)
                                                                    <img src="../assets/images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197134)
                                                                    <img src="../assets/images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197135)
                                                                    <img src="../assets/images/faces/GRC/felf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196993)
                                                                    <img src="../assets/images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196994)
                                                                    <img src="../assets/images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196995)
                                                                    <img src="../assets/images/faces/GRC/mhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196869)
                                                                    <img src="../assets/images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196870)
                                                                    <img src="../assets/images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 196871)
                                                                    <img src="../assets/images/faces/GRC/fhuman.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197257)
                                                                    <img src="../assets/images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197258)
                                                                    <img src="../assets/images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197259)
                                                                    <img src="../assets/images/faces/GRC/melf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198809)
                                                                    <img src="../assets/images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198810)
                                                                    <img src="../assets/images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198811)
                                                                    <img src="../assets/images/faces/GRC/mdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197777)
                                                                    <img src="../assets/images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197778)
                                                                    <img src="../assets/images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197779)
                                                                    <img src="../assets/images/faces/GRC/mhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198685)
                                                                    <img src="../assets/images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198686)
                                                                    <img src="../assets/images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 198687)
                                                                    <img src="../assets/images/faces/GRC/fdhan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197653)
                                                                    <img src="../assets/images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197654)
                                                                    <img src="../assets/images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 197655)
                                                                    <img src="../assets/images/faces/GRC/fhalf.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229561)
                                                                    <img src="../assets/images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229562)
                                                                    <img src="../assets/images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229563)
                                                                    <img src="../assets/images/faces/GRC/mdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229437)
                                                                    <img src="../assets/images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229438)
                                                                    <img src="../assets/images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 229439)
                                                                    <img src="../assets/images/faces/GRC/fdekan.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204969)
                                                                    <img src="../assets/images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204970)
                                                                    <img src="../assets/images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204971)
                                                                    <img src="../assets/images/faces/GRC/mwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204845)
                                                                    <img src="../assets/images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204846)
                                                                    <img src="../assets/images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 204847)
                                                                    <img src="../assets/images/faces/GRC/fwizzard.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200865)
                                                                    <img src="../assets/images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200866)
                                                                    <img src="../assets/images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200867)
                                                                    <img src="../assets/images/faces/GRC/mgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200741)
                                                                    <img src="../assets/images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200742)
                                                                    <img src="../assets/images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 200743)
                                                                    <img src="../assets/images/faces/GRC/fgiant.gif"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213045)
                                                                    <img src="../assets/images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213046)
                                                                    <img src="../assets/images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @elseif ($top->class == 213047)
                                                                    <img src="../assets/images/faces/GRC/rumir.png"
                                                                        alt="image" />
                                                                @endif
                                                                <span class="pl-2">{{ $top->name }}</span>
                                                            </td>
                                                            <td class="font-weight-bold"> {{ $top->lvl }} </td>
                                                            <td class="font-weight-bold"> {{ $top->kill_count }} </td>
                                                            <td class="font-weight-medium">
                                                                @if ($top->sts == 1)
                                                                    <div class="badge badge-success">Offline</div>
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

        <!-- Modal INFORMATION SERVER-->
        <div class="modal fade" id="detailser" tabindex="-1" aria-labelledby="detailser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-3" id="detailser">Detail Server Information</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <li class="font-weight-bold">PURE PVP SYSTEM</li>
                        <li class="font-weight-bold">Hero IV</li>
                        <li class="font-weight-bold">Instan Level 115 + 10</li>
                        <li class="font-weight-bold">Auto Consumed IP</li>
                        <li class="font-weight-bold">Daily Boss Summond </li>
                        <li class="font-weight-bold">Crone/IP Based</li>
                        <li class="font-weight-bold">Power Arena</li>
                        <li class="font-weight-bold">All Item In IP MALL and Badge Mall</li>
                        </li>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
