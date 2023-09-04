<?php

function operations($placeholder , $name , $value , $type){
$ele = "
<div class=\"form-group\">
<p><h4><label for=\"exampleInputUsername\">$placeholder</label></h4></p>
<p><input type=$type class=\"form-control\"  placeholder=$placeholder name=$name ></p>
</div>
";

echo $ele ;

}


?>
     <!-- <div class="form-group">
     <p><h4><label for="exampleInputUsername">Username</label></h4></p>
     <p><input type="text" class="form-control"  placeholder="username" name="username"></p>
     </div> -->