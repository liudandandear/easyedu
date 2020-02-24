@extends('admin.layouts.app')
@section('content')
    <header class="header header-inverse">
        <div class="container">
            <div class="header-info">
                <div class="left">
                    <br>
                    <h2 class="header-title"><strong>用户模块</strong> <small class="subtitle">List of all your tickets are available in this page.</small></h2>
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

                <div class="col-lg-7">
                    <div class="card shadow-1">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class="w-100px text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="badge badge-ring badge-danger mr-2 mt-2"></span> General</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>


                            <tr>
                                <td><span class="badge badge-ring badge-warning mr-2 mt-2"></span> Bootstrap</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>


                            <tr>
                                <td><span class="badge badge-ring badge-info mr-2 mt-2"></span> Gruntjs</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>


                            <tr>
                                <td><span class="badge badge-ring badge-purple mr-2 mt-2"></span> Plugins</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>


                            <tr>
                                <td><span class="badge badge-ring badge-dark mr-2 mt-2"></span> Script</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>


                            <tr>
                                <td><span class="badge badge-ring badge-pink mr-2 mt-2"></span> Style</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-lg-5">
                    <form class="card shadow-1">
                        <h5 class="card-title"><strong>Create New Category</strong></h5>

                        <div class="card-body">
                            <div class="form-group">
                                <label class="require">Name</label>
                                <input class="form-control" type="text" name="name" id="cat-name">
                            </div>

                            <div class="form-group">
                                <label class="require">Slug</label>
                                <input class="form-control" type="text" name="slug" id="cat-slug">
                                <small>String to be use in URL</small>
                            </div>

                            <div class="form-group">
                                <label>Color</label>
                                <input class="form-control" type="text" name="name" value="#33cabb"
                                       data-provide="colorpicker">
                            </div>
                        </div>

                        <footer class="card-footer text-right">
                            <button class="btn btn-primary">Save</button>
                        </footer>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
