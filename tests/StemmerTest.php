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
    public function testStemming()
    {
        $stemmer   = new Stemmer();
        $testWords = require("dict.php");
        foreach ($testWords as $word => $base) {
            $this->assertEquals($base, $stemmer->getWordBase($word));
        }
    }
}