<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ExternalFlashExposureComp extends \PHPExiftool\Driver\Tag
{

    protected $Id = 25;

    protected $Name = 'ExternalFlashExposureComp';

    protected $FullName = 'Pentax::FlashInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'External Flash Exposure Comp';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        144 => array(
            'Id' => 144,
            'Label' => 'n/a (Manual Mode)',
        ),
        164 => array(
            'Id' => 164,
            'Label' => '-3.0',
        ),
        167 => array(
            'Id' => 167,
            'Label' => '-2.5',
        ),
        168 => array(
            'Id' => 168,
            'Label' => '-2.0',
        ),
        171 => array(
            'Id' => 171,
            'Label' => '-1.5',
        ),
        172 => array(
            'Id' => 172,
            'Label' => '-1.0',
        ),
        175 => array(
            'Id' => 175,
            'Label' => '-0.5',
        ),
        176 => array(
            'Id' => 176,
            'Label' => '0.0',
        ),
        179 => array(
            'Id' => 179,
            'Label' => '0.5',
        ),
        180 => array(
            'Id' => 180,
            'Label' => '1.0',
        ),
    );

}