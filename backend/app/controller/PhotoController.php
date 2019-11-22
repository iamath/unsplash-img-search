<?php

require_once '../model/Photo.php';

class PhotoController
{
    public function showRandom(): void
    {
        $photoObj = new Photo();

        echo $this->returnJson($photoObj->getRandom());
    }

    public function showSearch(): void
    {
        $photoObj = new Photo();
        $photoUrl = $photoObj->search($_GET['query']);

        echo ($photoUrl != '404') ? $this->returnJson($photoUrl) : '404';
    }

    private function returnJson(string $photoUrl): string
    {
        return json_encode(['photoUrl' => $photoUrl]);
    }
}
