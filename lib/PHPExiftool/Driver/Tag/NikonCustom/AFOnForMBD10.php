<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AFOnForMBD10 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AF-OnForMB-D10';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF-On For MB-D10';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF-On',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'AE/AF Lock',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'AE Lock Only',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'AE Lock (reset on release)',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'AE Lock (hold)',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'AF Lock Only',
        ),
        96 => array(
            'Id' => 96,
            'Label' => 'Same as FUNC Button',
        ),
    );

}