@extends('layouts.auth-master')

@section('content')
    <form id="frm-user-register">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <select class="form-control" name="role">
                <option value="">Select role</option>
                <option value="web_developer">Web Developer</option>
                <option value="web_designer">Web Designer</option>
                <option value="manager">Manager</option>
            </select>
            <label for="floatingRole">Role</label>
            @if ($errors->has('role'))
            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="button" id="btn-user-reg">Register</button>
        
        @include('auth.partials.copy')
    </form>
@endsection

@section('custom_js')
    <script>
        $('#btn-user-reg').on('click', function() {
            let data = $('#frm-user-register').serialize();

            $.ajax({
                type: "POST",
                url: "/user",
                data: data,
                success: function(res) {

                }
            });
        })
    </script>
@endsection