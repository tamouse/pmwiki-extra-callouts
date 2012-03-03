<?php if (!defined('PmWiki')) exit(); // -*- mode: php; time-stamp-start: "version [\"<]"; time-stamp-format: "%Y-%3b-%02d %02H:%02M"; -*- 
/**
 *
 * mycallouts
 *
 * @author Tamara Temple <tamara@tamaratemple.com>
 * @since 2011/11/01
 * @version <2011-Nov-15 04:03>
 * @copyright (c) 2011 Tamara Temple Web Development
 * @license GPLv3
 *
 */

SDV($HTMLHeaderFmt['mycallouts'], "
  <link rel='stylesheet' href='$PubDirUrl/css/mycallouts/mycallouts.css' 
    type='text/css' />
");

SDVA($WikiStyle['quote'], array('class'=>'round lrindent quote'));
SDVA($WikiStyle['note'], array('class'=>'round lrindent tip'));
