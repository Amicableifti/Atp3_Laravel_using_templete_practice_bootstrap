@if(Session('key'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
  <strong>Alert!
  </strong> {{(Session('key'))}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
 @endif
 @if(Session('msg'))
<div  class="alert alert-warning alert-dismissible fade show" role="alert">
  
  <strong  class="text-center">Alert!
  </strong> {{(Session('msg'))}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
 @endif