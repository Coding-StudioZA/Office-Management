<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin</title>

        @include('layouts.css')
        @include('layouts.js')
    </head>

    <body>
        <div id="wrapper" class="Index">
            @include('layouts.navbar')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                <h2>Create Task</h2>
                <hr />
                <form class="m-t" method="post" action="{{ url('/admin/trytoaddtask') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
				        <input class="form-control" type="hidden" id="from" name="from" value="{{ session('currentUser') }}">
						<div class="form-group">
							<div class="col-md-10" align="left"><label>Name</label></div>
							<div class="col-md-10">
								<input class="form-control" type="text" id="name" name="name" required="" placeholder="Task Name">
							</div>
						</div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>To</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="to" name="to" required="" placeholder="Assigning To">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Body</label></div>
				            <div class="col-md-10">
				            	<textarea class="form-control" id="body" name="body" required="" placeholder="Description"></textarea>
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Duration</label></div>
				            <div class="col-md-10">
								<input class="form-control" type="text" id="duration" name="duration" required="" placeholder="Duration">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Status</label></div>
				            <div class="col-md-10">
				            	<select class="form-control" id="status" name="status">
									<option>To Do</option>
									<option>Doing</option>
									<option>Done</option>
								</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Create" class="btn btn-primary block full-width m-b" />.
				            </div>
				        </div>
				    </div>
                </form>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>

<script>
	$(document).ready(function () {
	    $("#myInput").on("keyup", function () {
	        var value = $(this).val().toLowerCase();
	        $("#myTable tr").filter(function () {
	            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	        });
	    });
	});
</script>