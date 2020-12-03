@extends("layout.app")
@section("content")

<div class="w-100 h-100 d-flex justify-content-center align-items-center">
	<div class="w-50">
		<h1 class="display-2 text-white">Edit your Todo called {{$todo->title}} </h1>
		
		<form action="{{route('todo.update',$todo->id)}}" method="POST">
		@csrf <!--protect your application from cross-site request forgery (CSRF) attacks-->
		@method("PUT")
		<div class="input-group mb-3 w-100">
			<input type="text" class="form-control form-control-lg" name="title" value="{{$todo->title}}" placeholder="Type here" aria-label="Recipient's username" aria-description="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-success" type="submit" id="button-addon2">Save</button>
	</div>
	</div>
	</form>
	
	</div>
</div>

@endsection