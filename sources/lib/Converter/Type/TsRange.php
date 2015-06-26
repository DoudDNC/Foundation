<?php
/*
 * This file is part of PommProject's Foundation package.
 *
 * (c) 2014 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\Converter\Type;

/**
 * TsRange
 *
 * Type for range of timestamps.
 *
 * @package Foundation
 * @copyright 2014 Grégoire HUBERT
 * @author Grégoire HUBERT
 * @license X11 {@link http://opensource.org/licenses/mit-license.php}
 */
class TsRange extends BaseRange
{
    /**
     * getRegexp
     *
     * @see BaseRange
     */
    protected function getRegexp()
    {
        return '/([\[\(])"?([0-9 :+\.-]+)"?, *"?([0-9 :+\.-]+)?"([\]\)])/';
    }

    /**
     * getSubElement
     *
     * @see BaseRange
     */
    protected function getSubElement($element)
    {
        return new \DateTime($element);
    }
}
