<?php

class Chapter
{
    private $idChapter;
    private $chaptTitle;
    private $chaptSentence;
    private $chaptContent;
    private $chaptDateCreated;
    private $idUser;

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
    public function getChaptTitle()
    {
        return $this->chaptTitle;
    }

    /**
     * @param mixed $chaptTitle
     */
    public function setChaptTitle($chaptTitle)
    {
        $this->chaptTitle = $chaptTitle;
    }

    /**
     * @return mixed
     */
    public function getChaptSentence()
    {
        return $this->chaptSentence;
    }

    /**
     * @param mixed $chaptSentence
     */
    public function setChaptSentence($chaptSentence)
    {
        $this->chaptSentence = $chaptSentence;
    }

    /**
     * @return mixed
     */
    public function getChaptContent()
    {
        return $this->chaptContent;
    }

    /**
     * @param mixed $chaptContent
     */
    public function setChaptContent($chaptContent)
    {
        $this->chaptContent = $chaptContent;
    }

    /**
     * @return mixed
     */
    public function getChaptDateCreated()
    {
        return $this->chaptDateCreated;
    }

    /**
     * @param mixed $chaptDateCreated
     */
    public function setChaptDateCreated($chaptDateCreated)
    {
        $this->chaptDateCreated = $chaptDateCreated;
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