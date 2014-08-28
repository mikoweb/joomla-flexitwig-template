<?php

/**
 * @package Joomla FlexiTwig Template
 * @author Rafał Mikołajun <rafal@mikoweb.pl>
 * @url http://www.vision-web.pl
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */

defined('_JEXEC') or die;
defined('RAPID_FRAMEWORK') or die('Joomla! Rapid Framework is not installed.');

use Joomla\Rapid\FlexiContent\Templating\ItemView;

echo ItemView::create($this)
    ->render()
;
