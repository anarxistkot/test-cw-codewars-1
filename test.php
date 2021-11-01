<?php

/**
 * Создайте функцию nextBigger, которая принимает положительное целое число и возвращает следующее большее число, которое может быть образовано перестановкой его цифр.
 * Например:
 * 12 ==> 21
 *  513 ==> 531
 *  2017 ==> 2071
 *
 *  nextBigger(num: 12)   // returns 21
 *  nextBigger(num: 513)  // returns 531
 *  nextBigger(num: 2017) // returns 2071
 *
 * если цифры не могут быть переставлены, чтобы получить большее число, верните -1
 * например:
 *  9 ==> -1
 *  111 ==> -1
 *  531 ==> -1
 *
 *  nextBigger(num: 9)   // returns -1
 *  nextBigger(num: 111) // returns -1
 *  nextBigger(num: 531) // returns -1
 */

function nextBigger($n) {
    // your code here
}


/**
 * Пример нескольких первых тестов
 */
class Test extends TestCase {
    public function testBasicTests() {
        $this->assertSame(21, nextBigger(12));
        $this->assertSame(531, nextBigger(513));
        $this->assertSame(2071, nextBigger(2017));
        $this->assertSame(441, nextBigger(414));
        $this->assertSame(414, nextBigger(144));
        $this->assertSame(123456798, nextBigger(123456789));
        $this->assertSame(1234567908, nextBigger(1234567890));
        $this->assertSame(-1, nextBigger(9876543210));
        $this->assertSame(-1, nextBigger(9999999999));
        $this->assertSame(59884848483559, nextBigger(59884848459853));
    }
}
