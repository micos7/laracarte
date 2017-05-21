@extends('layouts.default',['title' => 'Contact'])

@section('content')
	<div class="container">
		<div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
        <h2>Get in touch</h2>
        <p class="text-muted">If you`re having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email')}} " data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>
        <form method="POST" action="{{ route('contact')}} ">
		            {!! csrf_field() !!}

		            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
		                <label for="name" class="control-label">Name</label>
		                <input type="text" name="name" id="name" class="form-control"required="required" value={{ old('name')}}>
                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
		            </div>

		            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
		                <label for="email"  class="control-label">Email</label>
		                <input type="email" name="email" id="email" class="form-control" required="required" value={{ old('email')}}>
                        {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
		            </div>
		            <div class="form-group  {{ $errors->has('message') ? 'has-error' : '' }}">
                         <label for="message"  class="control-label sr-only">Message</label>
		                <textarea class="form-control" id="message" name="message" rows="10" cols="10" required="required">{{ old('message')}}</textarea>
                        {!! $errors->first('message', '<span class="text-danger">:message</span>') !!}
                    </div>

		            <div class="form-group">
		                <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
		            </div>
		        </form>
        </div>
        </div>
	</div>
@stop