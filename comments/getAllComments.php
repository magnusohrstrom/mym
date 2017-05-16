<?php
include 'Comment.php';
$hej = new Comment($pdo);
highlight_string("<?php\n\$hej->getAllComments(); =\n" . var_export($hej->getAllComments(), true) . ";\n?>");
$hejsan = json_encode($hej->getAllComments());
echo $hejsan;