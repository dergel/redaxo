<?php

/**
 * MetaForm Addon.
 *
 * @author markus[dot]staab[at]redaxo[dot]de Markus Staab
 *
 * @package redaxo5
 */

$curDir = __DIR__;
require_once $curDir . '/extensions/extension_cleanup.php';

rex_metainfo_cleanup(['force' => true]);
