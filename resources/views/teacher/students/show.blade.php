@extends('layouts.teacher')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Dashbord</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>
 @include('teacher.message')
 <!--error-->
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

   @foreach($students as $c)

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give marks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!--FORM START -->
       <form method="Post" enctype="multipart/form-data" class="" 
     action="{{route('teacher.students.update',$c->id)}}">
      @method('PUT')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label >Id</label>
    <input type="" value="{{$c->sid}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label >Marks</label>
<input value="{{$c->marks}}" type="textarea" name="mark" class="form-control"></div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       @endforeach
   </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
















 <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="{{route('teacher.notices.index')}}" class="btn btn-primary" >ALL Students</a>
           <a href="{{route('teacher.notices.index')}}" class="btn btn-primary" >back</a>
      	</p>
      <table  id="dataTable" class="table  table-bordered table-striped">
      	<tr>
      		<th>
      			ID
      		</th>
      		<th>
      			 Student Id
      		</th>
      		<th>
      		  Student Name
      		</th>
          <th>
           Email
          </th>
          <th>
        Marks
          </th>
            <th>
        Marks
          </th>
          <th>
       Last Message
          </th>
          <th>
         Action
          </th>
          <th>
         Sent message
          </th>
      	</tr>
   @foreach($students as $c)

   <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->sid}}</td>
    <td>{{$c->sname}}</td>
          <td>{{$c->semail}}</td>
          <td>{{$c->marks}}</td>


@if($c->marks <= '100' && $c->marks >='90' )
         
         <td>A+</td>
         
         @elseif($c->marks <= '90' && $c->marks >='80' )
           <td>A</td>
         
         @elseif($c->marks <= '80' && $c->marks >='70' )
           <td>B</td>
           @elseif($c->marks <= '70' && $c->marks >='60' )
           <td>C</td>
           @elseif($c->marks <= '60' && $c->marks >='50' )
           <td>D</td>
          @else
           <td>F</td>
           @endif

          
          <td>{{$c->grade}}</td>
          <td>

<!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Give Marks
              </button>
          
         </td>
         <td>
          <a href="{{route('teacher.notes.edit',$c->id)}}" class="btn btn-primary" >Give Msessage</a>
         </td>
   </tr>
   @endforeach
      </table>
     </div>
</section>
@endsection