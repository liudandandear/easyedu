@extends('admin.layouts.app')
@section('content')

    <header class="header header-inverse">
        <div class="container">
            <div class="header-info">
                <div class="left">
                    <br>
                    <h2 class="header-title"><strong>统计分析</strong> <small class="subtitle">Some insights and
                            statistics </small></h2>
                </div>
                <div class="right flex-middle d-none d-md-block">
                    <form class="lookup lookup-circle lookup-lg lookup-right" target="index.html">
                        <input type="text" name="s">
                    </form>
                </div>
            </div>
        </div>
    </header><!--/.header -->





    <div class="main-content">
        <div class="container">
            <div class="row">


                <div class="col-6 col-lg-3">
                    <div class="card shadow-1">
                        <div class="card-body">
                            <div class="flexbox">
                                <h5>Articles</h5>
                                <div class="dropdown">
                                    <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i
                                                class="ti-more-alt rotate-90"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                        <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                        <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i>
                                            Refresh</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-2">
                                <div class="fs-60 fw-400 text-info">34</div>
                                <span class="fw-400 text-muted">Total</span>
                            </div>
                        </div>

                        <div class="card-body bg-lighter fw-400 py-12">
                            <span class="text-muted mr-1">Draft:</span>
                            <span class="text-dark">16</span>
                        </div>

                        <div class="progress mb-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%; height: 3px;"
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3">
                    <div class="card shadow-1">
                        <div class="card-body">
                            <div class="flexbox">
                                <h5>Categories</h5>
                                <div class="dropdown">
                                    <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i
                                                class="ti-more-alt rotate-90"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                        <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                        <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i>
                                            Refresh</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-2">
                                <div class="fs-60 fw-400 text-danger">15</div>
                                <span class="fw-400 text-muted">Total</span>
                            </div>
                        </div>

                        <div class="card-body bg-lighter fw-400 py-12">
                            <span class="text-muted mr-1">Used:</span>
                            <span class="text-dark">9</span>
                        </div>

                        <div class="progress mb-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%; height: 3px;"
                                 aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3">
                    <div class="card shadow-1">
                        <div class="card-body">
                            <div class="flexbox">
                                <h5>Tickets</h5>
                                <div class="dropdown">
                                    <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i
                                                class="ti-more-alt rotate-90"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="ticket-single.html"><i
                                                    class="ion-android-list"></i> Details</a>
                                        <a class="dropdown-item" href="ticket-add.html"><i class="ion-android-add"></i>
                                            Add new</a>
                                        <a class="dropdown-item" href="ticket-list.html"><i
                                                    class="ion-android-refresh"></i> Refresh</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-2">
                                <div class="fs-60 fw-400 text-primary">82</div>
                                <span class="fw-400 text-muted">Open</span>
                            </div>
                        </div>

                        <div class="card-body bg-lighter fw-400 py-12">
                            <span class="text-muted mr-1">Closed today:</span>
                            <span class="text-dark">28</span>
                        </div>

                        <div class="progress mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 40%; height: 3px;"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3">
                    <div class="card shadow-1">
                        <div class="card-body">
                            <div class="flexbox">
                                <h5>Forums</h5>
                                <div class="dropdown">
                                    <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i
                                                class="ti-more-alt rotate-90"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="forum-single.html"><i
                                                    class="ion-android-list"></i> Details</a>
                                        <a class="dropdown-item" href="forum-add.html"><i class="ion-android-add"></i>
                                            Add new</a>
                                        <a class="dropdown-item" href="forum-list.html"><i
                                                    class="ion-android-refresh"></i> Refresh</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-2">
                                <div class="fs-60 fw-400 text-dark">39</div>
                                <span class="fw-400 text-muted">topic</span>
                            </div>
                        </div>

                        <div class="card-body bg-lighter fw-400 py-12">
                            <span class="text-muted mr-1">Unanswered:</span>
                            <span class="text-dark">13</span>
                        </div>

                        <div class="progress mb-0">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 30%; height: 3px;"
                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>


                <div class="col-12 h-50px"></div>


                <div class="col-md-6 col-lg-8">
                    <div class="card shadow-1">
                        <div class="card-header">
                            <h5 class="card-title"><strong>Popular</strong> categories</h5>
                        </div>

                        <div class="card-body">
                            <ul class="list-inline text-right gap-items-4 mb-30">
                                <li class="list-inline-item">
                                    <span class="badge badge-dot mr-1" style="background-color: #9966ff"></span>
                                    <span>Plugins</span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="badge badge-dot mr-1" style="background-color: #4bc0c0"></span>
                                    <span>Guntjs</span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="badge badge-dot mr-1" style="background-color: #ff9f40"></span>
                                    <span>Bootstrap</span>
                                </li>
                            </ul>

                            <canvas id="chartjs-cat" height="120" data-provide="chartjs"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-1">
                        <h5 class="card-title"><strong>Best</strong> Agent</h5>

                        <div class="p-30 pt-50 text-center">
                            <a class="avatar avatar-xxl status-warning mb-3" href="#">
                                <img src="{{ asset('img/avatar/1.jpg') }}" alt="...">
                            </a>
                            <h5><a href="#">Maryam Amiri</a></h5>
                            <p><small class="fs-13">Designer</small></p>
                            <p class="text-light fs-12">Hello everyone, I am Maryam. My designs are used in several big
                                companies in United State and other countries.</p>
                            <div class="gap-items fs-16">
                                <a class="text-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="text-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                <a class="text-google" href="#"><i class="fa fa-google"></i></a>
                                <a class="text-twitter" href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection