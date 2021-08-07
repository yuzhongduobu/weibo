
@extends('default')

@section('title','home')

@section('content')

  <div class="container" id="home_container">

  </div>
@stop
<script>
  var directories = <?php echo json_encode($directories); ?>;
  window.onload = function(){
    var link_str = ""
    for(var i=0;i<directories.length;i++){
		link_str = link_str + "<a class='link_str' id='link"+i+"' href=''>"+directories[i].replace("public/","")+"</a><br/>"
    }
	document.getElementById("home_container").innerHTML = link_str;
    for (var i=0;i<directories.length;i++){
      	console.log(directories[i]);
      	document.getElementById("link"+i).href = directories[i].replace("public/","");
    }
  }

  
</script>


