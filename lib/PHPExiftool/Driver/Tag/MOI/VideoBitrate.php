<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MOI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class VideoBitrate extends AbstractTag
{

    protected $Id = 218;

    protected $Name = 'VideoBitrate';

    protected $FullName = 'MOI::Main';

    protected $GroupName = 'MOI';

    protected $g0 = 'MOI';

    protected $g1 = 'MOI';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Video Bitrate';
}
