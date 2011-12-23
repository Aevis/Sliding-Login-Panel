<?php

/**
 *
 * @version	$Id$
 * @package	Sliding Login Panel
 * @copyright	Copyright (C) 2011 Silas Hellinger https://github.com/Aevis. All rights reserved.
 * @license	GNU/GPLv2
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

$document = &JFactory::getDocument();
$document->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
$document->addScript( JURI::root().'/media/mod_sliding_login_panel/js/slide.js' );
$document->addStyleSheet( JURI::root()."/media/mod_sliding_login_panel/css/slide.css");
$document->addStyleSheet( JURI::root()."/media/mod_sliding_login_panel/css/style.css");
?>

<div id="toppanel">
	<div id="panel">
            <div class="content clearfix">
                <div class="left">		
                    <?php
                        jimport('joomla.application.module.helper');
                        $modules = JModuleHelper::getModules('slidingpanel');
                        foreach($modules as $module)
                        {
                            echo JModuleHelper::renderModule($module, array('style'=>'xhtml'));
                        }
                    ?>
                </div>
            </div>
        </div>
	<div class="tab">
            <ul class="login">
                <li class="left">&nbsp;</li>
                <li>Hello <?php echo $user->username; ?></li>
                <li class="sep">|</li>
                <li id="toggle">
                    <a id="open" class="open" href="#"><?php echo $login; ?></a>
                    <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
                </li>
                <li class="right">&nbsp;</li>
            </ul> 
	</div>
</div>