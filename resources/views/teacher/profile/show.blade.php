@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Teacher</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>



 @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                     
                    @endforeach
                </ul>
            </div>
        @endif
<!--
 <h3 class="text-left text-danger">{{(Session::get('key'))}}</h3>-->
 <!---alert for data save-->
 @include('teacher.message')
  <!---alert for data save-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  @foreach($users as $c)
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-----///-->

       <form method="post" action="{{route('teacher.profile.update',$c->id)}}">
        @method('PUT')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="" value="{{$c->password}}" name="password" class="form-control" id="exampleInputPassword1">
       </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" value="{{$c->password}}" name="password_confirmation" class="form-control" >
  </div>
  
   @endforeach
      



   <!-----///-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->

 <section class="content">
      <div class="container-fluid">
      	<p>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Change password
</button>
      		<a href="{{route('teacher.index')}}" class="btn btn-primary" >Back</a>
      		<a href="{{route('teacher.profile.edit',request()->session()->get('user')->id)}}" class="btn btn-primary" >Edit</a>
      	</p>
   @foreach($users as $c)

   
   	<label>User Id  :</label>{{$c->user_id}}<br>
   	<label>Full Name:</label>{{$c->Full_Name}}<br>
   	<label>Password :</label>{{$c->password}}<br>
   	<label>Type     :</label>{{$c->type}}</br>
   
   @endforeach

   
     </div>
</section>
@endsection