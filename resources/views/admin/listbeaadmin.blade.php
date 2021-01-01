<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Dashboard')
    @include('admin.layouts.head')
</head>
<body>
<!--Preloader-->
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@include('admin.layouts.theme')
<!--EndPreloader-->

<!--Content-->

<div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
        <br><br><br>
        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="box">
                <div class="box-header">
                    <h3>Table with elements</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th style="width:50px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 22, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Avatar system</td>
                            <td>15c</td>
                            <td>Jul 15, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Throwdown</td>
                            <td>4c</td>
                            <td>Jul 11, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 7, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Formasa</td>
                            <td>8c</td>
                            <td>Jul 3, 2013</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn white dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu dropdown-menu-scale">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Avatar system</td>
                            <td>15c</td>
                            <td>Jul 2, 2013</td>
                            <td>
                                <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Videodown</td>
                            <td>4c</td>
                            <td>Jul 1, 2013</td>
                            <td>
                                <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <ul class="pagination pagination-sm m-a-0">
                                <li><a href>Previous</a></li>
                                <li class="active"><a href>1</a></li>
                                <li><a href>2</a></li>
                                <li><a href>3</a></li>
                                <li><a href>4</a></li>
                                <li><a href>5</a></li>
                                <li><a href>Next</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!--EndContent-->

<script src="{{asset('admin/assets/scripts/app.html.js')}}"></script>
</body>
</html>
