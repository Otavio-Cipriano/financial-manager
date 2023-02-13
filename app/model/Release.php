<?php

namespace app\model;

use DateTime;

enum ReleaseType{
    case lucro;
    case despesa;
}

enum ReleaseCategory{
    case previsto;
    case extra;
}

class  Release {

    public int $id;
    public ReleaseType $type;
    public ReleaseCategory $category;
    public DateTime $date;
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