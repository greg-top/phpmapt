##Introduction
PHP 5 already supports type declaration for array, class and interface. PHP 7 comes with more support. It supports scalar type declaration for int, boolean, float and string.

Describe the definition of scalar type declaration
Create code examples of scalar type declaration
Discuss the concern with scalar type declaration





##Scalar type declaration has Two Modes:

1.) **Coercive** DEFAULT
* Convert the value if possible

2.) **Strict**:
* No conversion
* declare( strict_types = 1 ); //first line of the code, scope only one file

##Benefits:
* Consistency
* Easier error debugging 

##Others:
* No performance benefits, PHP doesn't have **JIT** (Just In Time compiler)
