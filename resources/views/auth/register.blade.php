@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9 col-10 p-4 rounded-0 shadow bg-white">

        <div class="text-center mb-3">
            <img src="{{ asset('images/Purewood-F-logo.svg') }}" alt="Purewood Logo" class="mb-3" style="max-width: 370px;">
        </div>

        <div class="text-left mt-3">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="mb-2">Name</label>
                        <input type="text" id="name" class="form-control rounded-0" name="name" required autocomplete="name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" id="email" class="form-control rounded-0" name="email" required autocomplete="email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="dob" class="mb-2">Date of Birth</label>
                        <input type="date" id="dob" class="form-control rounded-0" name="dob" required autocomplete="bday">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="gender" class="mb-2">Gender</label>
                        <select class="form-control rounded-0" id="gender" name="gender" required autocomplete="sex">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="department" class="mb-2">Department</label>
                        <select class="form-control rounded-0" id="department" name="department" required>
                            <option value="Sales">Sales</option>
                            <option value="Production">Production</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="role" class="mb-2">Department Role</label>
                        <select class="form-control rounded-0" id="role" name="role" required>
                            <option value="Admin">Admin</option>
                            <option value="Employee">Employee</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="profile_picture" class="mb-2">Profile Picture</label>
                        <input type="file" id="profile_picture" class="form-control rounded-0" name="profile_picture" autocomplete="photo">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="mobile" class="mb-2">Mobile Number</label>
                        <input type="text" id="mobile" class="form-control rounded-0" name="mobile" required autocomplete="tel">
                    </div>
                </div>

                <div class="d-flex mb-2 justify-content-end">
                    <a href="{{ route('login') }}" class="text-decoration-none text-dark">Do you have Already account?</a>
                </div>

                <button type="submit" class="btn btn-dark rounded-0 mt-3 w-100">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection