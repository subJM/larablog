@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page Title Here')
@section('content')
    <div class="login-box bg-white box-shadow border-radius-10">
        <div class="login-title">
            <h2 class="text-center text-primary">Login</h2>
        </div>
        <form>
            <x-form-alerts></x-form-alerts>
            @csrf
            <div class="select-role">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active">
                        <input type="radio" name="options" id="admin" />
                        <div class="icon">
                            <img
                                src="/back/vendors/images/briefcase.svg"
                                class="svg"
                                alt=""
                            />
                        </div>
                        <span>I'm</span>
                        Manager
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="user" />
                        <div class="icon">
                            <img
                                src="/back/vendors/images/person.svg"
                                class="svg"
                                alt=""
                            />
                        </div>
                        <span>I'm</span>
                        Partner
                    </label>
                </div>
            </div>
            <div class="input-group custom mb-1">
                <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Username / Email"
                    name="login_id"
                    value="{{ old('login_id') }}"
                />
                <div class="input-group-append custom">
                    <span class="input-group-text"
                    ><i class="icon-copy dw dw-user1"></i
                        ></span>
                </div>
            </div>
            @error('login_id')
                <span class="text-danger ml-1">{{ $msg }}</span>
            @enderror
            <div class="input-group custom mb-1 mt-2">
                <input
                    type="password"
                    class="form-control form-control-lg"
                    placeholder="**********"
                    name="password"
                />
                <div class="input-group-append custom">
                                            <span class="input-group-text"
                                            ><i class="dw dw-padlock1"></i
                                                ></span>
                </div>
            </div>
            @error('password')
            <span class="text-danger ml-1">{{ $msg }}</span>
            @enderror
            <div class="row pb-30">
                <div class="col-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck1"
                        />
                        <label class="custom-control-label" for="customCheck1"
                        >Remember</label
                        >
                    </div>
                </div>
                <div class="col-6">
                    <div class="forgot-password">
                        <a href="forgot-password.html">Forgot Password</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">
                        <!--
                        use code for form submit
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                    -->
                        <a
                            class="btn btn-primary btn-lg btn-block"
                            href="index.html"
                        >Sign In</a
                        >
                    </div>
{{--                    <div--}}
{{--                        class="font-16 weight-600 pt-10 pb-10 text-center"--}}
{{--                        data-color="#707373"--}}
{{--                    >--}}
{{--                        OR--}}
{{--                    </div>--}}
{{--                    <div class="input-group mb-0">--}}
{{--                        <a--}}
{{--                            class="btn btn-outline-primary btn-lg btn-block"--}}
{{--                            href="register.html"--}}
{{--                        >Register To Create Account</a--}}
{{--                        >--}}
{{--                    </div>--}}
                </div>
            </div>
        </form>
    </div>
@endsection

