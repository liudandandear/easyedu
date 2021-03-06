@extends('admin.layouts.app')
@section('content')

    <header class="header header-inverse">
        <div class="container">
            <div class="header-info">
                <div class="left">
                    <br>
                    <h2 class="header-title"><strong>课程</strong> <small class="subtitle">You can see list of all articles in this page. Use action buttons to make change to them.</small></h2>
                </div>
            </div>

            <div class="header-action">
                <nav class="nav">
                    <a class="nav-link active" href="article-list.html">Articles</a>
                    <a class="nav-link" href="article-add.html">Add new</a>
                </nav>

                <div class="buttons">
                    <a class="btn btn-primary btn-float" href="article-add.html" title="Create new article" data-provide="tooltip"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </header><!--/.header -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-xl-3">
                    <div class="card shadow-1">
                        <ul class="nav nav-lg nav-pills flex-column">
                            <li class="nav-item active">
                                <i class="fa fa-files-o"></i>
                                <a class="nav-link" href="#">All</a>
                                <span class="tag tag-pill tag-secondary">6</span>
                            </li>

                            <li class="nav-item">
                                <i class="fa fa-file-text-o"></i>
                                <a class="nav-link" href="#">Draft</a>
                            </li>
                        </ul>
                    </div>


                    <div class="card shadow-1">
                        <h5 class="card-title"><strong>Filters</strong></h5>

                        <form class="card-body">

                            <div class="form-group">
                                <label>Categories</label>
                                <select title="All Categories" multiple data-provide="selectpicker" data-width="100%" data-actions-box="true">
                                    <option>General</option>
                                    <option>Update</option>
                                    <option>How to</option>
                                    <option>Guide</option>
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

                            <div class="media align-items-center" data-id="1">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">Getting Started with TheAdmin</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-purple">Guide</span>
                                        <span class="divider-dash"></span>
                                        Views 789
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
                            </div>

                            <div class="media align-items-center" data-id="2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">Creating and Using Posts</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-success">How to</span>
                                        <span class="divider-dash"></span>
                                        Views 787
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
                            </div>

                            <div class="media align-items-center" data-id="2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">How to upgrading TheAdmin to new version</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-success">How to</span>
                                        <span class="divider-dash"></span>
                                        Views 123
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
                            </div>

                            <div class="media align-items-center" data-id="2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">TheAdmin in your language</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-info">General</span>
                                        <span class="divider-dash"></span>
                                        Views 643
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
                            </div>

                            <div class="media align-items-center" data-id="2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">Description of how and why to use JavaScript in themes and posts</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-purple">Guide</span>
                                        <span class="divider-dash"></span>
                                        Views 424
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
                            </div>

                            <div class="media align-items-center" data-id="2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <a class="media-body text-truncate pl-12" href="#">
                                    <h5 class="fs-15">How to use images in your pages</h5>
                                    <small class="opacity-75 fw-300">
                                        In <span class="text-success">How to</span>
                                        <span class="divider-dash"></span>
                                        Views 233
                                    </small>
                                </a>

                                <a class="media-action hover-primary" href="#" data-provide="tooltip" title="Edit"><i class="ti-pencil"></i></a>
                                <a class="media-action hover-danger" href="#" data-provide="tooltip" title="Delete" data-perform="delete-single" data-target=""><i class="ti-close"></i></a>
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