@extends('admin.layouts.app')
@section('content')
    <header class="header header-inverse">
        <div class="container">
            <div class="header-info">
                <div class="left">
                    <br>
                    <h2 class="header-title"><strong>视频</strong> <small class="subtitle">List of all your tickets are available in this page.</small></h2>
                </div>
            </div>

            <div class="header-action">
                <nav class="nav">
                    <a class="nav-link active" href="ticket-list.html">Tickets</a>
                    <a class="nav-link" href="ticket-add.html">Add new</a>
                    <a class="nav-link" href="ticket-single.html">Single</a>
                </nav>

                <div class="buttons">
                    <a class="btn btn-primary btn-float" href="ticket-add.html" title="Create new ticket" data-provide="tooltip"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </header><!--/.header -->





    <div class="main-content">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-xl-3 d-none d-md-block1">
                    <div class="card shadow-1">
                        <ul class="nav nav-lg nav-pills flex-column">
                            <li class="nav-item active">
                                <i class="fa fa-comments"></i>
                                <a class="nav-link" href="#">All</a>
                                <span class="badge badge-pill badge-secondary">4</span>
                            </li>

                            <li class="nav-item">
                                <i class="fa fa-user"></i>
                                <a class="nav-link" href="#">Assigned to me</a>
                            </li>

                            <li class="nav-item">
                                <i class="fa fa-star"></i>
                                <a class="nav-link" href="#">Starred</a>
                            </li>
                        </ul>
                    </div>


                    <div class="card shadow-1">
                        <h5 class="card-title"><strong>Filters</strong></h5>

                        <form class="card-body">
                            <div class="form-group">
                                <label>Status</label>
                                <select title="All Statuses" multiple data-provide="selectpicker" data-width="100%">
                                    <option title="In Progress" data-content='<span class="badge badge-dot badge-secondary mr-2"></span> In Progress'>In Progress</option>
                                    <option title="On Hold" data-content='<span class="badge badge-dot badge-danger mr-2"></span> On Hold'>On Hold</option>
                                    <option title="Closed" data-content='<span class="badge badge-dot badge-success mr-2"></span> Closed'>Closed</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Categories</label>
                                <select title="All Categories" multiple data-provide="selectpicker" data-width="100%">
                                    <option>General</option>
                                    <option>Gruntjs</option>
                                    <option>Bootstrap</option>
                                    <option>Plugins</option>
                                </select>
                            </div>

                            <hr>

                            <div class="text-right">
                                <a class="btn btn-sm btn-bold btn-secondary mr-1" href="#">Reset</a>
                                <button class="btn btn-sm btn-bold btn-primary" type="submit">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-8 col-xl-9">

                    <div class="media-list media-list-divided media-list-hover" data-provide="selectall">

                        <header class="flexbox align-items-center media-list-header bg-transparent b-0 py-16 pl-20">
                            <div class="flexbox align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <span class="divider-line mx-1"></span>

                                <button class="btn disabled disableable" title="Delete selected" data-provide="tooltip" data-perform="delete" data-target=""><i class="fa fa-trash fs-15"></i></button>

                            </div>
                        </header>


                        <div class="media-list-body bg-white b-1">

                            <div class="media align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <label class="toggler fs-16 ml-20">
                                    <input type="checkbox" data-perform="toggle-star" data-target="#">
                                    <i class="fa fa-star"></i>
                                </label>

                                <span class="badge badge-dot badge-secondary" title="In Progress" data-provide="tooltip"></span>

                                <img class="avatar" src="{{ asset('img/avatar/1.jpg') }}" alt="...">

                                <a class="media-body text-truncate" href="ticket-single.html">
                                    <h5 class="fs-15">Center logo display not working on mobiles</h5>
                                    <small class="opacity-65 fw-300">
                                        #654
                                        <span class="divider-dash"></span>
                                        In Bootstrap
                                        <span class="divider-dash"></span>
                                        Updated 18 mins ago by Hossein
                                    </small>
                                </a>

                                <div class="fs-20 text-fade">01</div>
                            </div>


                            <div class="media align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <label class="toggler fs-16 ml-20">
                                    <input type="checkbox" data-perform="toggle-star" data-target="#" checked>
                                    <i class="fa fa-star"></i>
                                </label>

                                <span class="badge badge-dot badge-danger" title="On Hold" data-provide="tooltip"></span>

                                <img class="avatar" src="{{ asset('img/avatar/2.jpg') }}" alt="...">

                                <a class="media-body text-truncate" href="ticket-single.html">
                                    <h5 class="fs-15">How do I add a settings page on a MultiSite without destroying the dashboard?</h5>
                                    <small class="opacity-65 fw-300">
                                        #582
                                        <span class="divider-dash"></span>
                                        In General
                                        <span class="divider-dash"></span>
                                        Updated 7 days ago by Maryam
                                    </small>
                                </a>

                                <div class="fs-20 text-fade">03</div>
                            </div>


                            <div class="media align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <label class="toggler fs-16 ml-20">
                                    <input type="checkbox" data-perform="toggle-star" data-target="#">
                                    <i class="fa fa-star"></i>
                                </label>

                                <span class="badge badge-dot badge-success" title="On Hold" data-provide="tooltip"></span>

                                <img class="avatar" src="{{ asset('img/avatar/3.jpg') }}" alt="...">

                                <a class="media-body text-truncate" href="ticket-single.html">
                                    <h5 class="fs-15">How I load all data of home page of my admin?</h5>
                                    <small class="opacity-65 fw-300">
                                        #408
                                        <span class="divider-dash"></span>
                                        In Plugins
                                        <span class="divider-dash"></span>
                                        Updated 1 month ago by John
                                    </small>
                                </a>

                                <div class="fs-20 text-fade">16</div>
                            </div>


                            <div class="media align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <label class="toggler fs-16 ml-20">
                                    <input type="checkbox" data-perform="toggle-star" data-target="#">
                                    <i class="fa fa-star"></i>
                                </label>

                                <span class="badge badge-dot badge-success" title="On Hold" data-provide="tooltip"></span>

                                <img class="avatar" src="{{ asset('img/avatar/4.jpg') }}" alt="...">

                                <a class="media-body text-truncate" href="ticket-single.html">
                                    <h5 class="fs-15">Complete disable of Page/Post content area</h5>
                                    <small class="opacity-65 fw-300">
                                        #367
                                        <span class="divider-dash"></span>
                                        In Gruntjs
                                        <span class="divider-dash"></span>
                                        Updated 3 months ago by Enrico
                                    </small>
                                </a>

                                <div class="fs-20 text-fade">04</div>
                            </div>


                        </div>


                        <footer class="flexbox align-items-center py-20">
                            <span class="flex-grow text-right text-lighter pr-2">1-20 of 367</span>
                            <nav>
                                <a class="btn btn-sm btn-square disabled" href="#"><i class="ti-angle-left"></i></a>
                                <a class="btn btn-sm btn-square" href="#"><i class="ti-angle-right"></i></a>
                            </nav>
                        </footer>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
