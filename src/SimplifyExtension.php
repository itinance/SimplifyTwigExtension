<?php
/*
 *
 * (C) ITinance GmbH <https://github.com/itinance/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace simplifyTwig;

/**
 * Brings ezComponents str_simplify-function to Twig
 *
 * @author Hagen Hübel <hhuebel@itinance.com>
 */
class SimplifyExtension extends \Twig_Extension
{

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName ()
    {
        return 'itinance/SimplifyExtension';
    }

    /**
     * Returns an array with all filters available by this extension
     *
     * @return array
     */
    public function getFilters ()
    {
        return array(
            new \Twig_SimpleFilter('simplify', [$this, 'simplify']),
        );
    }

    /**
     * Substitutes newlines, tabs, and multiple spaces from the string $str and replaces it with a single blank.
     * Whitespace in the beginning and at the end of the $str are removed
     * Stolen from the former ezComponents-Framework
     *
     * @param string $stringValue
     * @return string
     */
    public function simplify( $stringValue ) {
        return trim(preg_replace( '/(\n|\t|\r\n|\s)+/', ' ', $stringValue ));
    }

}
