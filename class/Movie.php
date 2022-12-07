<?php
class Movie{
    public $title;
    public $budget;
    public $exit;
    public $boxOffice;


    /**
     * @param String $_title
     * @param String $_budget
     * @param String $_exit
     * @param String $_boxOffice
     */
    public function __construct($_title, $_budget, $_exit = null, $_boxOffice = null)
    {
        $this->title= $_title;
        $this->budget= $_budget;
        $this->exit= $_exit;
        $this->boxOffice= $_boxOffice;
    }
}
?>