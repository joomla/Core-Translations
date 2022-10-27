<?php

/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    ГНУ Општа јавна лиценца верзија 2 или понова; видете LICENSE.txt

 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps

 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * mk-MK localise class.
 *
 * @since  1.6
 */
abstract class En_GBLocalise
{
    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param   integer  $count  The number of items.
     *
     * @return  array  An array of potential suffixes.
     *
     * @since   1.6
     */
    public static function getPluralSuffixes($count)
    {
        if ($count == 0) {
            return array('0');
        } elseif ($count == 1) {
            return array('ONE', '1');
        } else {
            return array('OTHER', 'MORE');
        }
    }
}
 
No context
File: localise. php
