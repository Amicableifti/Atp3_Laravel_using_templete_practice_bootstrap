<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!--datatable css--> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <title>Document</title>
</head>
<body>


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


 <section class="content">
      <div class="container-fluid">
      	<p>
      		<a href="" class="btn btn-primary" >ALL Students</a>
           <a href="{{route('teacher.courses.index')}}" class="btn btn-primary" >back</a>
      	</p>
      <table id="dataTable" class="table table-bordered table-striped">
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
            Department
          </th>
          <th>
           Cgpa
          </th>
          <th>
         Course id
          </th>
          <th>
       Creditcomplete
          </th>
          <th>
         Email
          </th>
          <th>
       Result
          </th>
          <th>
      Grade
          </th>
      	</tr>
   @foreach($students as $c)

   <tr>
   	<td>{{$c->id}}</td>
   	<td>{{$c->sid}}</td>
   	<td>{{$c->sname}}</td>
      <td>{{$c->sdepartment}}</td>
        <td>{{$c->scgpa}}</td>
          <td>{{$c->cid}}</td>
          <td>{{$c->credetcomplete}}</td>
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


   </tr>


   @endforeach
      </table>
     {{$students->links()}}
     </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>