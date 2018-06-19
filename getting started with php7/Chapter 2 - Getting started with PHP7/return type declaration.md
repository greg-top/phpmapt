##Introduction
PHP always has dynamic return type in functions. PHP 7 introduces a new feature, return type declaration, that will allow us to define the return type in a function.

Explore what the return type declaration is
Create a basic function with return type declaration
Explain the benefits of return type declaration

##Modes
* 1.) **Coercive** DEFAULT
  * Convert the value if possible
  
  2.) **Strict**:
  * No conversion
  * declare( strict_types = 1 ); //first line of the code, scope only one file

##Benefits:
* Consistency
* Easier error debugging 

##Others:
* No performance benefits, PHP doesn't have **JIT** (Just In Time compiler)
