<?php

class music
{
    private string $name;
    private string $genre;
    private int $listen;

   

    public function __construct(string $name, string $genre, int $listen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    public function getName()
    {
        return $this->name;
    }
}

?>