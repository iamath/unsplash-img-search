<?php

namespace App\Controller;

use App\Model\Photo;

class PhotoController
{
    public function showRandom(): void
    {
        $photoObj = new Photo();
        $photo = $photoObj->getRandom();

        echo json_encode($photo);
    }

    public function showSearch(): void
    {
        $photoObj = new Photo();
        $photos = $photoObj->search($_GET['query']);

        echo json_encode($photos);
    }
}
