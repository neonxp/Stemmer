<?php
/**
 * This file is part of the RussianStemmer package
 *
 * (c) Alexander Kiryukhin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace NXP;

class StemmerTest extends \PHPUnit_Framework_TestCase
{
    public function testStemmingDataProvider()
    {
        return require("dict.php");
    }

    /**
     * @dataProvider testStemmingDataProvider
     *
     * @param string $word
     * @param string $expected
     */
    public function testStemming($word, $expected)
    {
        $this->assertEquals($expected, Stemmer::getWordBase($word));
    }
}