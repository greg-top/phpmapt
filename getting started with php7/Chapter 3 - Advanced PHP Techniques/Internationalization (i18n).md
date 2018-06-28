## Introduction
Targeting the world-wide users means that we have to support all languages in our web application. We need to know how to use internationalization (i18n).

* Describe what internationalization (i18n) is
* Explain the ASCII and the Unicode concept
* Show steps to enable internationalization in PHP

## Definition
**Internalization** is an ability to support more languages and regions <br>

## ASCII
**ASCII** American Standard Code for Information Interchange. The first character set (encoding standard - from binary to characters) used between computers on the Internet. <br>
* https://www.ascii-code.com/

## Limitation of ASCII
* was good for english spoken countries
* 7 bit is not enough to support all languages

## UNICODE
* superset of ASCII
* UNICODE is not encoding from binary (large map of character set)
* UNICODE is character set
* Each character is referred as "code point" using hexadecimal, e.g. <br>
U+0042 is capital **B**, where: <br>
U+, unicode <br>
0042, HEX number
* https://unicode-table.com/en
* PHP supports UNICODE by **Multibyte String mbstring** extension <br>
http://php.net/manual/en/ref.mbstring.php

## UNICODE ENCODINGS
* UTF-8 (8 bits)
* UTF-16
* UTF-32

## USAGE
* HTML <br>
meta charset="UTF-8"
* PHP <br>
mb_international_encoding('UTF-8'); <br>
mb_http_output('UTF-8'); <br>
mb_http_input('UTF-8'); <br>
mb_language('uni'); <br>
* DB <br>
CREATE DATABASE mydb
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
  