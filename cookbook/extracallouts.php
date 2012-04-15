<?php if (!defined('PmWiki')) exit(); 
/**
 *
 * extracallouts
 *
 * @author Tamara Temple <tamara@tamaratemple.com>
 * @since 2011/11/01
 * @copyright (c) 2011 Tamara Temple Web Development
 * @license GPLv3
 *
 */
$RecipeInfo['ExtraCallouts']['Version'] = '2012-04-15';

SDV($HTMLHeaderFmt['extracallouts'], "
  <link rel='stylesheet' href='$PubDirUrl/extracallouts/extracallouts.css' type='text/css' />
");

SDVA($WikiStyle['quote'], array('class'=>'round lrindent quote'));
SDVA($WikiStyle['note'], array('class'=>'round lrindent tip'));
