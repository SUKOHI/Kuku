Kuku
====

A PHP package mainly developed for Laravel to generate link not escaping text.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Kuku\KukuServiceProvider'  
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Sukohi\Kuku\Facades\Kuku'
    )

Usage
====

    echo Kuku::rawLink('home/test', 'test<br>test');
    echo Kuku::rawLinkRoute('route.name', 'test<br>test');