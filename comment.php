<?php
include_once 'config.php';
include_once constant("MODEL_DIR").'dao/CommentDAO.php';
include_once constant("MODEL_DIR").'CommentResponseBuilder.php';
$responseGetter=new ApiResponseGetter();
echo $responseGetter->get('comment');
?>
