<?php

namespace App\Model;

use Crew\Unsplash;
use App\Config\Config;

class Photo
{
    public function __construct()
    {
        Unsplash\HttpClient::init(Config::CREDENTIALS);
    }

    public function getRandom(): array
    {
        $photo = Unsplash\Photo::random();
        return $photo->toArray();
    }

    public function search(string $query): array
    {
        $photos = Unsplash\Search::photos($query);
        return $photos->getArrayObject()->toArray();
    }
}
