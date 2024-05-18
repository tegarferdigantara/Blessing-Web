@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">User Registered</span>
                        <span class="info-box-number">
                            {{ $User }}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shield-alt"></i></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Guild</span>
                        <span class="info-box-number">{{ $TNGuild->count() }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-warning">
                    <span class="info-box-icon"><i class="fas fa-info-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">PVE Medium</span>
                        <span class="info-box-text">Max Level : 115+10 -> Heroic Skill IV ,Disable Trinity</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-success">
                    <span class="info-box-icon"><i class="far fa-chart-bar"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Exp : Mid to Hard</span>
                        <span class="info-box-text">Crone Rates : Low</span>
                        <span class="info-box-text">Drop Rates : Mid </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-danger">
                    <span class="info-box-icon"><i class="fas fa-percentage"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Forging Rates:</span>
                        <span class="info-box-number">Rare Forge : 70%</span>
                        <span class="info-box-number">Unique Forge : 50%</span>
                        <span class="info-box-number">Ancient Forge : 30%</span>
                        <span class="info-box-number">Stats Refine : 50%</span>
                        <span class="info-box-number">Level Refine : 60%</span>
                        <span class="info-box-number">Max Refine Downgrade : -32 [Level]</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-percentage"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Max Booster & Reinforce : +21</span>
                        <span class="info-box-number">+1 to +5 100%</span>
                        <span class="info-box-number">+5 to +8 50%</span>
                        <span class="info-box-number">+8 to +12 30%</span>
                        <span class="info-box-number">+12 to +14 15%</span>
                        <span class="info-box-number">+14 to +15 5%</span>
                        <span class="info-box-number">+15 to +18 1%</span>
                        <span class="info-box-number">+15 to +18 1%</span>
                        <span class="info-box-number">+18 to +21 0.5%</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- Left col -->
            <div class="col-md-8">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Top Player</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Ingame Name</th>
                                        <th>Level</th>
                                        <th>Class</th>
                                        <th>Kill</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($TOP15)
                                        @foreach ($TOP15 as $top)
                                            @if (substr($top->name, 0, 1) !== '!')
                                                <tr>
                                                    <td class="font-weight-bold">
                                                        @if ($top->class == 197133)
                                                            <img src="../images/faces/GRC/felf.gif" alt="image" />
                                                        @elseif ($top->class == 197134)
                                                            <img src="../images/faces/GRC/felf.gif" alt="image" />
                                                        @elseif ($top->class == 197135)
                                                            <img src="../images/faces/GRC/felf.gif" alt="image" />
                                                        @elseif ($top->class == 196993)
                                                            <img src="../images/faces/GRC/mhuman.gif" alt="image" />
                                                        @elseif ($top->class == 196994)
                                                            <img src="../images/faces/GRC/mhuman.gif" alt="image" />
                                                        @elseif ($top->class == 196995)
                                                            <img src="../images/faces/GRC/mhuman.gif" alt="image" />
                                                        @elseif ($top->class == 196869)
                                                            <img src="../images/faces/GRC/fhuman.gif" alt="image" />
                                                        @elseif ($top->class == 196870)
                                                            <img src="../images/faces/GRC/fhuman.gif" alt="image" />
                                                        @elseif ($top->class == 196871)
                                                            <img src="../images/faces/GRC/fhuman.gif" alt="image" />
                                                        @elseif ($top->class == 197257)
                                                            <img src="../images/faces/GRC/melf.gif" alt="image" />
                                                        @elseif ($top->class == 197258)
                                                            <img src="../images/faces/GRC/melf.gif" alt="image" />
                                                        @elseif ($top->class == 197259)
                                                            <img src="../images/faces/GRC/melf.gif" alt="image" />
                                                        @elseif ($top->class == 198809)
                                                            <img src="../images/faces/GRC/mdhan.gif" alt="image" />
                                                        @elseif ($top->class == 198810)
                                                            <img src="../images/faces/GRC/mdhan.gif" alt="image" />
                                                        @elseif ($top->class == 198811)
                                                            <img src="../images/faces/GRC/mdhan.gif" alt="image" />
                                                        @elseif ($top->class == 197777)
                                                            <img src="../images/faces/GRC/mhalf.gif" alt="image" />
                                                        @elseif ($top->class == 197778)
                                                            <img src="../images/faces/GRC/mhalf.gif" alt="image" />
                                                        @elseif ($top->class == 197779)
                                                            <img src="../images/faces/GRC/mhalf.gif" alt="image" />
                                                        @elseif ($top->class == 198685)
                                                            <img src="../images/faces/GRC/fdhan.gif" alt="image" />
                                                        @elseif ($top->class == 198686)
                                                            <img src="../images/faces/GRC/fdhan.gif" alt="image" />
                                                        @elseif ($top->class == 198687)
                                                            <img src="../images/faces/GRC/fdhan.gif" alt="image" />
                                                        @elseif ($top->class == 197653)
                                                            <img src="../images/faces/GRC/fhalf.gif" alt="image" />
                                                        @elseif ($top->class == 197654)
                                                            <img src="../images/faces/GRC/fhalf.gif" alt="image" />
                                                        @elseif ($top->class == 197655)
                                                            <img src="../images/faces/GRC/fhalf.gif" alt="image" />
                                                        @elseif ($top->class == 229561)
                                                            <img src="../images/faces/GRC/mdekan.gif" alt="image" />
                                                        @elseif ($top->class == 229562)
                                                            <img src="../images/faces/GRC/mdekan.gif" alt="image" />
                                                        @elseif ($top->class == 229563)
                                                            <img src="../images/faces/GRC/mdekan.gif" alt="image" />
                                                        @elseif ($top->class == 229437)
                                                            <img src="../images/faces/GRC/fdekan.gif" alt="image" />
                                                        @elseif ($top->class == 229438)
                                                            <img src="../images/faces/GRC/fdekan.gif" alt="image" />
                                                        @elseif ($top->class == 229439)
                                                            <img src="../images/faces/GRC/fdekan.gif" alt="image" />
                                                        @elseif ($top->class == 204969)
                                                            <img src="../images/faces/GRC/mwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 204970)
                                                            <img src="../images/faces/GRC/mwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 204971)
                                                            <img src="../images/faces/GRC/mwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 204845)
                                                            <img src="../images/faces/GRC/fwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 204846)
                                                            <img src="../images/faces/GRC/fwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 204847)
                                                            <img src="../images/faces/GRC/fwizzard.gif" alt="image" />
                                                        @elseif ($top->class == 200865)
                                                            <img src="../images/faces/GRC/mgiant.gif" alt="image" />
                                                        @elseif ($top->class == 200866)
                                                            <img src="../images/faces/GRC/mgiant.gif" alt="image" />
                                                        @elseif ($top->class == 200867)
                                                            <img src="../images/faces/GRC/mgiant.gif" alt="image" />
                                                        @elseif ($top->class == 200741)
                                                            <img src="../images/faces/GRC/fgiant.gif" alt="image" />
                                                        @elseif ($top->class == 200742)
                                                            <img src="../images/faces/GRC/fgiant.gif" alt="image" />
                                                        @elseif ($top->class == 200743)
                                                            <img src="../images/faces/GRC/fgiant.gif" alt="image" />
                                                        @elseif ($top->class == 213045)
                                                            <img src="../images/faces/GRC/rumir.png" alt="image" />
                                                        @elseif ($top->class == 213046)
                                                            <img src="../images/faces/GRC/rumir.png" alt="image" />
                                                        @elseif ($top->class == 213047)
                                                            <img src="../images/faces/GRC/rumir.png" alt="image" />
                                                        @endif
                                                        <span class="pl-2">{{ $top->name }}</span>
                                                    </td>
                                                    <td class="font-weight-bold"> {{ $top->lvl }} </td>
                                                    <td class="font-weight-bold">
                                                        @if (in_array($top->class, [196869, 196993]))
                                                            Human
                                                        @elseif (in_array($top->class, [196870, 196994]))
                                                            Guardian
                                                        @elseif (in_array($top->class, [196871, 196995]))
                                                            Defender
                                                        @elseif (in_array($top->class, [197133, 197257]))
                                                            Elf
                                                        @elseif (in_array($top->class, [197134, 197258]))
                                                            Priest
                                                        @elseif (in_array($top->class, [197135, 197259]))
                                                            Templar
                                                        @elseif (in_array($top->class, [197653, 197777]))
                                                            Archer
                                                        @elseif (in_array($top->class, [197654, 197778]))
                                                            Ranger
                                                        @elseif (in_array($top->class, [197655, 197779]))
                                                            Scout
                                                        @elseif (in_array($top->class, [198685, 198809]))
                                                            Assassin
                                                        @elseif (in_array($top->class, [198686, 198810]))
                                                            Avenger
                                                        @elseif (in_array($top->class, [198687, 198811]))
                                                            Predator
                                                        @elseif (in_array($top->class, [200741, 200865]))
                                                            Warrior
                                                        @elseif (in_array($top->class, [200742, 200866]))
                                                            Berseker
                                                        @elseif (in_array($top->class, [200743, 200867]))
                                                            Savage
                                                        @elseif (in_array($top->class, [204845, 204969]))
                                                            Mage
                                                        @elseif (in_array($top->class, [204846, 204970]))
                                                            Warlock
                                                        @elseif (in_array($top->class, [204847, 204971]))
                                                            Wizard
                                                        @elseif (in_array($top->class, [229437, 229561]))
                                                            Dragon Fighter
                                                        @elseif (in_array($top->class, [229438, 229562]))
                                                            Dragon Knight
                                                        @elseif (in_array($top->class, [229439, 229563]))
                                                            Dragon Sage
                                                        @endif

                                                    </td>
                                                    <td class="font-weight-bold"> {{ $top->kill_count }} </td>
                                                    <td class="font-weight-medium">
                                                        @if ($top->sts == 1)
                                                            <div class="badge badge-success">Online</div>
                                                        @else
                                                            <div class="badge badge-danger">Offline</div>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <h1>Records not found</h1>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left d-none">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right d-none">View All
                            Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
@endsection
