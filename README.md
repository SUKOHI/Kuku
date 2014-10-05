Kuku
====

A PHP package mainly developed for Laravel to generate HTML tags that have raw text.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Kuku\KukuServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Kuku' => 'Sukohi\Kuku\Facades\Kuku',
    )

Usage
====

**Label**

    {{ Kuku::label('name', '<i class="fa fa-home"></i> LABEL') }} 
**Label with options**

    {{ Kuku::label('name', '<i class="fa fa-home"></i> LABEL', ['class' => 'text-danger']) }}
**Link**  

    {{ Kuku::link('url', '<i class="fa fa-home"></i> TEXT') }}
**Link with attributes**  

    {{ Kuku::link('url', '<i class="fa fa-home"></i> TEXT', ['class' => 'text-danger']) }} 
**Link Route**  

    {{ Kuku::linkRoute('home.kuku', '<i class="fa fa-home"></i> TEXT') }}
**Link Route with parameters and attributes**  

    {{ Kuku::linkRoute('home.kuku', '<i class="fa fa-home"></i> TEXT', [$id], ['class' => 'text-danger']) }}