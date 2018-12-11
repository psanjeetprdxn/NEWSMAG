<?php
class Article extends Connection
{
    protected $conn;
    public function __construct()
    {
        $connection = new Connection();
        $this->conn = $connection->connect();
    }

    /*
    ****************************************
          ADD ARTICLE
    ****************************************
    */
    public function add($title, $description, $section_name, $thumbnail_image)
    {
        $isAdded = false;
        $query = "INSERT INTO article(title, description, section_name, thumbnail_image) VALUES(?, ?, ?, ?)";
        $addArticle = $this->conn->prepare($query);
        $addArticle->bindParam(1, $title);
        $addArticle->bindParam(2, $description);
        $addArticle->bindParam(3, $section_name);
        $addArticle->bindParam(4, $thumbnail_image, PDO::PARAM_LOB);
        $addArticle->execute();
        if ($addArticle) {
            $isAdded = true;
        }
        return $isAdded;
    }
}
