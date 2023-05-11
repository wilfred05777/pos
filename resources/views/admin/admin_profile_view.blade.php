@extends('admin_dashboard')
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">

                            <h4 class="mb-0">Geneva McKnight</h4>
                            <p class="text-muted">@webdesigner</p>

                            <button type="button"
                                class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                            <button type="button"
                                class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                            <div class="text-start mt-3">
                                {{-- <h4 class="font-13 text-uppercase">About Me :</h4>
                                <p class="text-muted font-13 mb-3">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of type.
                                </p> --}}
                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Geneva
                                        D. McKnight</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123)
                                        123 1234</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                        class="ms-2">user@email.domain</span></p>

                                <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span
                                        class="ms-2">USA</span></p>
                            </div>

                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                            class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                            class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                            class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);"
                                        class="social-list-item border-secondary text-secondary"><i
                                            class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end card -->

                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Inbox</h4>

                            <div class="inbox-widget" data-simplebar style="max-height: 350px;">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Adhamdannaway</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply
                                        </a>
                                    </p>
                                </div>
                            </div> <!-- end inbox-widget -->
                        </div>
                    </div> <!-- end card--> --}}

                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-fill navtab-bg">

                                <li class="nav-item">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            {{-- <div class="tab-content"> --}}



                            <div class="tab-pane" id="settings">
                                <form>
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>
                                        Personal Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">First
                                                    Name</label>
                                                <input type="text" class="form-control" id="firstname"
                                                    placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastname" class="form-label">Last
                                                    Name</label>
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->


                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->

                            {{-- </div> <!-- end tab-content --> --}}
                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
