
@extends('default')

@section('title','home')

@section('content')

  <div class="container" id="img_container">
    
  </div>
@stop
<script>
  var files = <?php echo json_encode($files); ?>;
  window.onload = function(){
    var img_str = ""
    for(var i=0;i<files.length;i++){
		img_str = img_str + "<img class='img' id='img"+i+"' src=''/>"
    }
	document.getElementById("img_container").innerHTML = img_str;
    for (var i=0;i<files.length;i++){
      files[i]=files[i].replace("public","storage");
      console.log(files[i]);
      document.getElementById("img"+i).src = files[i];
    }
  }
</script>


