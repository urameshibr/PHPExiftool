#PHPExiftool

[![Build Status](https://secure.travis-ci.org/romainneutron/PHPExiftool.png?branch=master)](http://travis-ci.org/romainneutron/PHPExiftool)

PHP Exiftool is an Object Oriented driver for Phil Harvey's Exiftool.

see : http://www.sno.phy.queensu.ca/~phil/exiftool/


This driver is not suitable for production, it is still under heavy development.

##Exiftool Reader

Exiftool Reader provides a natural syntax to extract metadatas from files :

```php
<?php

use PHPExiftool\Reader;
use PHPExiftool\Driver;

$Reader = new Reader();

$Reader
  ->in(array('documents', '/Picture'))
  ->extensions(array('doc', 'jpg', 'cr2', 'dng'))
  ->exclude(array('test', 'tmp'))
  ->followSymLinks();

foreach ($Reader as $MetaDatas)
{
    echo "found file " . $MetaDatas->getFile()->getPathname() . "\n";

    foreach ($MetaDatas as $metadata)
    {
        if ($metadata->getValue() instanceof Driver\Value\Binary)
        {
            echo sprintf("\t--> Field %s has binary datas" . PHP_EOL, $metadata->getTag());
        }
        else
        {
            // Handle monovalued field
            echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTag(), $metadata->getValue());
        }
    }
}
```
