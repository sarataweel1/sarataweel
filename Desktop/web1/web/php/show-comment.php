<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php
include_once("../php/comment-config.php");
$commentQuery = "SELECT comment_id, parent_comment_id, comment, comment_sender, date FROM comment_live WHERE parent_comment_id = '0' ORDER BY parent_comment_id DESC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["comment_sender"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["comment"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["comment_id"].'">Reply</button></div>
		</div> ';
	$commentHTML .= getCommentReply($conn, $comment["comment_id"]);
}
echo $commentHTML;

function getCommentReply($conn, $parentId = 0, $marginLeft = 0) {
	$commentHTML = '';
	$commentQuery = "SELECT comment_id, parent_comment_id, comment, comment_sender, date FROM comment_live WHERE parent_comment_id = '".$parentId."'";	
	$commentsResult = mysqli_query($conn, $commentQuery);
	$commentsCount = mysqli_num_rows($commentsResult);
	if($parentId == 0) {
		$marginLeft = 0;
	} else {
		$marginLeft = $marginLeft + 48;
	}
	if($commentsCount > 0) {
		while($comment = mysqli_fetch_assoc($commentsResult)){  
			$commentHTML .= '
				<div class="panel panel-primary" style="margin-left:'.$marginLeft.'px">
				<div class="panel-heading">By <b>'.$comment["comment_sender"].'</b> on <i>'.$comment["date"].'</i></div>
				<div class="panel-body">'.$comment["comment"].'</div>
				<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["comment_id"].'">Reply</button></div>
				</div>
				';
			$commentHTML .= getCommentReply($conn, $comment["comment_id"], $marginLeft);
		}
	}
	return $commentHTML;
}
?>
    
    </body>
</html>
