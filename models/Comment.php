<?php
/**
 * Created by PhpStorm.
 * User: jpg
 * Date: 13/03/19
 * Time: 14:37
 */

class Comment
{
    private $idComment;
    private $comsContent;
    private $comsDateCreated;
    private $idUser;
    private $idChapter;

    /**
     * @return mixed
     */
    public function getIdChapter()
    {
        return $this->idChapter;
    }

    /**
     * @param mixed $idChapter
     */
    public function setIdChapter($idChapter)
    {
        $this->idChapter = $idChapter;
    }

    /**
     * @return mixed
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * @param mixed $idComment
     */
    public function setIdComment($idComment)
    {
        $this->idComment = $idComment;
    }

    /**
     * @return mixed
     */
    public function getComsContent()
    {
        return $this->comsContent;
    }

    /**
     * @param mixed $idComsContent
     */
    public function setComsContent($comsContent)
    {
        $this->comsContent = $comsContent;
    }

    /**
     * @return mixed
     */
    public function getComsDateCreated()
    {
        return $this->comsDateCreated;
    }

    /**
     * @param mixed $comsDateCreated
     */
    public function setComsDateCreated($comsDateCreated)
    {
        $this->comsDateCreated = $comsDateCreated;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    
}