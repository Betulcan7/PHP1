<?php

class ListenList
{
    public array $music = [];

    public function addMusic(Music $music)
    {
        if($this-> checkMusic($music))
        {
        $this->music[] = $music;
        }
    }

    private function checkMusic(Music $music)
    {
        if (in_array($music, $this->music))
        {
            return false;
        }
            return true;
    }

    public function countMusics(): int{
        return count($this->musics);
    }
} 



?> 