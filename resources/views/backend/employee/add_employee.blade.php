@extends('admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li> -->
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Employee</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Employee</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                
                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-fill navtab-bg">

                                <li class="nav-item">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-pane" id="settings">

                                {{-- form starts here --}}
                                <form method="post" action="{{ route('employee.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>
                                        Add Employee</h5>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="firstname" class="form-label">Employee Name</label>
                                                <input type="text" name="name" id="image" class="form-control @error('name') is-invalid @enderror">
                                                @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="email" class="form-label">Employee Email</label>
                                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="phone" class="form-label">Employee Phone</label>
                                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Employee Address</label>
                                                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror">
                                                @error('address')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="experience" class="form-label">Employee Experience</label>
                                                <select name="experience" class="form-select @error('experience') is-invalid @enderror" id="example-select">
                                                   <option selected disabled>Select Year</option>
                                                   <option value="1 Year">1 Year</option>
                                                   <option value="2 Years">2 Years</option>
                                                   <option value="3 Years">3 Years</option>
                                                   <option value="4 Years">4 Years</option>
                                                   <option value="5 Years">5 Years</option>
                                                </select>
                                                @error('experience')
                                                <span class="text-danger"> {{ $messge}} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="salary" class="form-label">Employee Salary</label>
                                                <input type="text" name="salary" id="salary" class="form-control @error('salary') is-invalid @enderror">
                                                @error('salary')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="vacation" class="form-label">Employee Vacation</label>
                                                <input type="text" name="vacation" id="vacation" class="form-control @error('vacation') is-invalid @enderror">
                                                @error('vacation')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Employee City</label>
                                                <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror">
                                                @error('city')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label">Employee Image</label>
                                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" alt="profile-image" >
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"></label>
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" >
                                               
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="first_name" class="form-label">
                                                    First Name</label>
                                                <input type="text" name="first_name" class="form-control" id="first_name"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="last_name" class="form-label">First
                                                    Last Name</label>
                                                <input type="text" name="last_name" class="form-control"
                                                    id="last_name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email
                                                </label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone
                                                </label>
                                                <input type="text" class="form-control" id="number" name="phone"
                                                    value="">
                                            </div>
                                        </div> -->
                                        <!-- end col -->



                                    </div> <!-- end row -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        })
    </script>
@endsection
