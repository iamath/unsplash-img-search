# unsplash-img-search

### How to use

Create a `Config.php` file inside `backend/app/config` and paste the following content:

```php
<?php

namespace App\Config;

class Config
{
    const CREDENTIALS = [
        'applicationId' => 'YOUR APPLICATION ID',
        'secret' => 'YOUR SECRET KEY',
        'utmSource' => 'YOUR APP NAME'
    ];
}
```
