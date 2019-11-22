<?php

require '../../vendor/autoload.php';

class Photo
{
    public function __construct()
    {
        require_once '../config/Unsplash.php';
        Crew\Unsplash\HttpClient::init($credentials);
    }

    public function getRandom(): string
    {
        $photo = Crew\Unsplash\Photo::random();
        return $photo->__get('urls')['small'];
    }

    public function search(string $query): string
    {
        $photos = Crew\Unsplash\Search::photos($query);
        $photo = $photos->getArrayObject()->toArray();

        return (count($photo)) ? $photo[0]['urls']['small'] : '404';
    }
}
