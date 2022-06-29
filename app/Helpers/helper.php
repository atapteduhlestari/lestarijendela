<?php

use Illuminate\Support\Str;

function limitString($desc, $num, $delimiter)
{
    return Str::limit($desc, $num, $delimiter);
}
