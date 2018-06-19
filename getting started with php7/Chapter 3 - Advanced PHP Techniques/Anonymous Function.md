## Introduction
Regular function is not suitable in some cases. PHP has anonymous function as a solution to improve the readability of the code.

* Describe the definition and show an example of anonymous function
* Describe closure as a part of anonymous function
* Describe the real usage and benefits of anonymous function

## Definition
**Anonymous function** is a function without a name <br>

## Usage
2 ways of creation:
* Assign to variable
* Via function

## Closure
This is special form of anonymous function<br>
* Anonymous function that can access variables imported from the outside scope without modifying original value

## Callback 
Use anonymous function as a callback parameter for array functions:
* array_walk
* array_filter
* array_map
* array_reduce

## Benefits
* code more readable 
* avoid polluting global namespace
* used in Laravel for routing