@extends('layouts.admin')
@section('content')
    <div class="wraper">
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-picture text-center" style="background-image:url('{{asset('contents/admin')}}/assets/images/big/bg.jpg')">
                    <div class="bg-picture-overlay"></div>
                    <div class="profile-info-name">
                        <img src="{{asset('contents/admin')}}/assets/images/users/avatar-1.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="profile-image">
                        <h3 class="text-white">John Deon</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row user-tabs">
            <div class="col-md-9 col-xl-6">
                <ul class="nav nav-tabs tabs" role="tablist">
                    <li class="nav-item tab">
                        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                            <span class="d-none d-sm-block">About Me</span>
                        </a>
                    </li>
                    <li class="nav-item tab">
                        <a class="nav-link" id="activities-tab" data-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                            <span class="d-none d-sm-block">Activities</span>
                        </a>
                    </li>
                    <li class="nav-item tab">
                        <a class="nav-link" id="projects-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                            <span class="d-none d-sm-block">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item tab">
                        <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                            <span class="d-none d-sm-block">Settings</span>
                        </a>
                    </li>

                    <div class="indicator"></div>
                </ul>
            </div>
            <div class="d-none d-sm-block col-md-3 col-xl-6">
                <div class="pull-right">
                    <div class="dropdown">
                        <a class="btn btn-primary btn-rounded dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Following
                            </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#" class="dropdown-item">Poke</a></li>
                            <li><a href="#" class="dropdown-item">Private message</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="#" class="dropdown-item">Unfollow</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content profile-tab-content">
                    <div class="tab-pane show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Personal Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-info-p">
                                            <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted">Johnathan Deo</p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted">(123) 123 1234</p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">johnathandeon @moltran.com</p>
                                        </div>
                                        <div class="about-info-p m-b-0">
                                            <strong>Location</strong>
                                            <br>
                                            <p class="text-muted">USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Languages</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="mb-0">
                                            <li>English</li>
                                            <li>Franch</li>
                                            <li>Greek</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Biography</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                                        <p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>

                                        <p class="mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Skills</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="m-b-15">
                                            <h5>Angular Js <span class="pull-right">60%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="m-b-15">
                                            <h5>Javascript <span class="pull-right">90%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-pink wow animated progress-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="m-b-15">
                                            <h5>Wordpress <span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-purple wow animated progress-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="m-b-0">
                                            <h5>HTML5 &amp; CSS3 <span class="pull-right">95%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="activities" aria-labelledby="activities-tab">
                        <div class="card card-default card-fill">
                            <div class="card-body">
                                <div class="timeline-2">
                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">5 minutes ago</div>
                                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">30 minutes ago</div>
                                            <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">59 minutes ago</div>
                                            <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">5 minutes ago</div>
                                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">30 minutes ago</div>
                                            <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <div class="text-muted">59 minutes ago</div>
                                            <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="projects" aria-labelledby="projects-tab">
                        <div class="card card-default card-fill">
                            <div class="card-header">
                                <h3 class="card-title">My Projects</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Moltran Admin</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="badge badge-info">Work in Progress</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Moltran Frontend</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="badge badge-success">Pending</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Moltran Admin</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="badge badge-pink">Done</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Moltran Frontend</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="badge badge-purple">Work in Progress</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Moltran Admin</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="badge badge-warning">Coming soon</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="setting" aria-labelledby="setting-tab">
                        <div class="card card-default card-fill">
                            <div class="card-header">
                                <h3 class="card-title">Edit Profile</h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="FullName">Full Name</label>
                                        <input type="text" value="John Doe" id="FullName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" value="john" id="Username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">Re-Password</label>
                                        <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="AboutMe">About Me</label>
                                        <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
