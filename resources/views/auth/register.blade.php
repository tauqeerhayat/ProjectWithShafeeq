@extends('auth.app')

@section('title')
    <title>Register User</title>
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="app-assets/images/logo/logo.png" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    Become A Member
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="index.html" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="user-name" placeholder="Choose Username" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="email" class="form-control round" id="user-email" placeholder="Your Email Address" required>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>
                                        </div>

                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 ">
                                    <span>OR Sign Up Using</span>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook">
                                        <span class="ft-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter">
                                        <span class="ft-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram">
                                        <span class="ft-instagram"></span>
                                    </a>
                                </div>

                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                                    <span>Already a member ?
                                        <a href="login.html" class="card-link">Sign In</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
