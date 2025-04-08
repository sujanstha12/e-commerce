@extends('admin.layout.master')
@section('container')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Profile</h2>
            </div>
        </div>
    </div>
    <div class="row column1">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>User Profile</h2>
                    </div>
                </div>
                <div class="full price_table padding_infor_info">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="full dis_flex center_text">
                                <div class="profile_img">
                                    <img width="180" class="rounded-circle" src="{{ Auth::user()->image }}" alt="#" />
                                </div>
                                <div class="profile_contant">
                                    <div class="contact_inner">
                                        <h3>{{ Auth::user()->name }}</h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i> : {{ Auth::user()->email }}</li>
                                            <li><i class="fa fa-phone"></i> : {{ Auth::user()->phone_number ?? 'Not Provided' }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="full inner_elements margin_top_30">
                                <div class="tab_style2">
                                    <div class="tabbar">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Recent Activity</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Projects Worked on</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Profile</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="container mt-5">
                                                    <div class="card p-4">
                                                        <h2 class="text-center">Admin {{ Auth::user()->name }} Editor</h2>
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        <button id="editProfile" class="btn btn-warning mb-3">Edit</button>
                                                        <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <img src="{{ Auth::user()->image }}" alt="Profile Picture" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                                                                    <input type="file" id="profileImage" name="image" accept="image/*" class="form-control mt-2" disabled>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="mb-3">
                                                                        <label for="username" class="form-label">Username</label>
                                                                        <input type="text" id="username" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter username" disabled>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="email" class="form-label">Email</label>
                                                                        <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter email" disabled>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="phone" class="form-label">Phone Number</label>
                                                                        <input type="tel" id="phone" name="phone_number" value="{{ $user->phone_number }}" class="form-control" placeholder="Enter phone number" disabled>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" id="address" name="address" value="{{ $user->address }}" class="form-control" placeholder="Enter address" disabled>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary w-100" disabled id="saveChanges">Save Changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <p>Project worked content goes here.</p>
                                            </div>
                                            <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <p>Profile section content goes here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script>
    document.getElementById("editProfile").addEventListener("click", function() {
        document.getElementById("profileImage").disabled = false;
        document.getElementById("username").disabled = false;
        document.getElementById("email").disabled = false;
        document.getElementById("phone").disabled = false;
        document.getElementById("address").disabled = false;
        document.getElementById("saveChanges").disabled = false;
    });
</script>
@endsection
