<?php
class postToEdit
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function edit($postId, $editTitle, $editContent){
        $postToEdit = $this->pdo->prepare(
            "UPDATE post SET title = :title, content = :content WHERE postId = $postId"
        );
        $postToEdit->execute([
            ":title"   => $editTitle,
            ":content" => $editContent
        ]);
    }

}