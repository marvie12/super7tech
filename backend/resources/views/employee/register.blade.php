@extends('layouts.app-master')

@section('content')
    <div class="row p-md-5">
        <div class="row mb-2">
            <div class="col col-md-6 mx-auto">
                <h2>{{ucwords($pageDetails['title'])}}</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col col-md-6 mx-auto">
                <form id="frm-register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    @foreach($form as $fld)
                        @include('layouts.components.forms', ['fld' => $fld, 'errors' => $errors])
                    @endforeach
                    <div class="text-end">
                        <button class="btn btn-md btn-primary" type="button" id="btn-reg">Register</button>
                        <a href="{{route('employee')}}" class="btn btn-md btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection