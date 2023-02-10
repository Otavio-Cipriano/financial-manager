<?php

namespace app\model;

class  Release {

    public int $id;
    public string $type;
    public string $category;
    public string $date;
    public string $briefing;
    public string $description;

    function __construct($type, $category, $date, $briefing, $description, $id = 0)
    {
       $this->type = $type;
       $this->category = $category;
       $this->date = $date;
       $this->briefing = $briefing;
       $this->description = $description;
       $this->id = $id;
    }
}