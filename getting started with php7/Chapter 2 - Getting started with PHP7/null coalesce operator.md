##Introduction
When checking a variable is set or null, it always needs more codes to write. PHP 7 has a new operator named The Null Coalesce Operator to make the null checking codes cleaner.

Describe why and what are the problems that the null coalesce operator can address
Define the null coalesce operator
Show some code examples

##Usage
The Null Colesce Operator returns firts operand if it is **EXIST** and **NOT NULL**, otherwise return second operand

first operand ?? second operand

echo $_GET['id'] ?? 0;