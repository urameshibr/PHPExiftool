<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ContinuousBracketing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32;

    protected $Name = 'ContinuousBracketing';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Continuous Bracketing';

    protected $Values = array(
        771 => array(
            'Id' => 771,
            'Label' => 'Low',
        ),
        1795 => array(
            'Id' => 1795,
            'Label' => 'High',
        ),
    );

}