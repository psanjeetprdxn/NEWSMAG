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

    /*
    *******************************************
          RETURNS ARTICLE OF PARTICULAR ID
    *******************************************
    */
    public function getById($article_id) {
        $article = "";
        $query = "SELECT * FROM article WHERE article_id = ?";
        $articles = $this->conn->prepare($query);
        $articles->execute([$article_id]);
        if ($articles->rowCount() > 0 ) {
            $article = $articles->fetch();
        }
        return $article;
    }

    /*
    ****************************************
          UPDATE FOR ARTICLES
    ****************************************
    */
    public function update($title, $description, $section_name, $article_id)
    {
        $isUpdated = false;
        $query = "UPDATE article SET title = ?, description = ?, section_name = ? WHERE article_id = ?";
        $update = $this->conn->prepare($query);
        $update->bindParam(1, $title);
        $update->bindParam(2, $description);
        $update->bindParam(3, $section_name);
        $update->bindParam(4, $article_id);
        $update->execute();
        if ($update) {
            $isUpdated = true;
        }
        return $isUpdated;
    }

    /*
    ****************************************
          UPDATE FOR ARTICLES
    ****************************************
    */
    public function updateThumbnail($title, $description, $section_name, $thumbnail_image, $article_id)
    {
        $isUpdated = false;
        $query = "UPDATE article SET title = ?, description = ?, section_name = ?, thumbnail_image = ? WHERE article_id = ?";
        $update = $this->conn->prepare($query);
        $update->bindParam(1, $title);
        $update->bindParam(2, $description);
        $update->bindParam(3, $section_name);
        $update->bindParam(4, $thumbnail_image, PDO::PARAM_LOB);
        $update->bindParam(5, $article_id);
        $update->execute();
        if ($update) {
            $isUpdated = true;
        }
        return $isUpdated;
    }
}
