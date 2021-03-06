<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Notices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teacher.index')}}">Dashbord</a></li>
              <li class="breadcrumb-item active">Notices</li>
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

 <!-- Modal -->
       
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      


        <section class="content">
      <div class="container-fluid"> 
        
   <form method="post" enctype="multipart/form-data" class="" action="{{route('teacher.notices.store')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        




        <div class="form-group">
        <div class="row">
          <label class="col-md-3">Course</label>
          <div class="col-md-12">
          
            <select class="form-control " name="course_id">
            <option value="">Choose Course</option>
            @foreach( $courses as $c)
                         <option value="{{$c->cid}}">{{$c->cname}}[{{$c->csection}}]</option>
             @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
     </div>
        <div class="form-group">
         <div class="row">
          <div class="col-md-12">
          
           <div class="form-group">
       <label for="exampleFormControlTextarea1">Notice</label>
       <textarea class="form-control" name="notice" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
       </div>
          </div>
          <div class="clearfix"></div>
        </div>
         </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
     </form>
     </div>
</section>

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
  Add Notices
</button>

<!-- Modal -->
           <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >Back</a>
        </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>
            ID
          </th>
          <th>
            Notice
          </th>
          <th>
            Action
          </th>
        </tr>
 @foreach($notices as $c)
   <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->noticename}}</td>
    <td>
      
      <form action="{{route('teacher.notices.destroy',$c->id)}}" method="post">
        <a href="{{route('teacher.notices.edit',$c->id)}}" class="btn btn-danger">Edit</a>
        @method('DELETE')
      <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" value="Delete" name="" class="btn btn-danger" >
      </form>
      </td>
   </tr>
    @endforeach
      </table>

   {{$notices->links()}}
     </div>
     
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>