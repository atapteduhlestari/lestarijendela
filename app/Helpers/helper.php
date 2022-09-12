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

function metaDesc()
{
    return 'Lestari Jendela merupakan merk dagang untuk produk kusen/frame, daun pintu dan jendela yang diproduksi oleh PT. Atap Teduh Lestari. Lestari Jendela memiliki 2 jenis material yang ditawarkan sebagai pilihan yaitu uPVC dan Aluminium. Dengan beragam tipe kusen/frame standard maupun custom sesuai dengan kebutuhan pelanggan.';
}


function isSuperadmin()
{
    return auth()->user()->username == 'superadmin';
}

function isAdmin()
{
    return auth()->user()->username == 'admin';
}
