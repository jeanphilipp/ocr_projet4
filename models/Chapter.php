<?php

class Chapter
{
    private $idChapter;
    private $chaptTitle;
    private $chaptSentence;
    private $chaptContent;
    private $chaptDateCreated;

    /**
     * @return mixed
     */
    public function getIdChapter()
    {
        return $this->idChapter;
    }

    /**
     * @param mixed $idChapter
     * @return Chapter
     */
    public function setIdChapter($idChapter)
    {
        $this->idChapter = $idChapter;
        return $this;
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
     * @return Chapter
     */
    public function setChaptTitle($chaptTitle)
    {
        $this->chaptTitle = $chaptTitle;
        return $this;
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
     * @return Chapter
     */
    public function setChaptSentence($chaptSentence)
    {
        $this->chaptSentence = $chaptSentence;
        return $this;
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
     * @return Chapter
     */
    public function setChaptContent($chaptContent)
    {
        $this->chaptContent = $chaptContent;
        return $this;
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
     * @return Chapter
     */
    public function setChaptDateCreated($chaptDateCreated)
    {
        $this->chaptDateCreated = $chaptDateCreated;
        return $this;
    }



}