@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="row">
	<div class="col-md-12">
	  <!-- general form elements -->
	  <div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Employee Type</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
        <form role="form">
	        <div class="box-body">
	            <div class="form-group">
	              <label for="exampleInputEmail1">Employee Type Name</label>
	              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Type">
	            </div>
	        </div>
	    	<div class="box-footer">
	            <button type="submit" class="btn btn-primary">Save</button>
	        </div>
        </form>
	</div>
	<!-- /.box -->
</div>
@endsection

