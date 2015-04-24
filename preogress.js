<script>
    function progress(){
    alert("Success");
    var i =0;
    for(i=0;i<100;i++)
    {
        document.getElementById('progress').innerHTML="<div class='progress'>
  <div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width:"+i+"%'>
    <span class='sr-only'>100% Complete</span>
  </div>
</div>";
    }
    
}
    </script>