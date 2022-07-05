<?php

use Illuminate\Support\Str;

function limitString($desc, $num = 50, $delimiter = '...')
{
    return Str::limit($desc, $num, $delimiter);
}

function emptyImage()
{
    return '/assets/img/no-image.png';
}
