
<?php
	$id = 1;
	if(isset($fatch)){
		$id = $fatch;
	}
?>

<button><a href="{{route('question.show',$id)}}">Click Me</a></button>