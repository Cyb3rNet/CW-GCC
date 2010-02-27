
# Cyb3r Web's General Coding Conventions

This document describes the coding conventions used in developed projects by Cyb3r Web.

The coding convention is inpired by the [Hungarian Notation](http://en.wikipedia.org/wiki/Hungarian_notation) to render code more readable and de-complexify its reading.

## Hungarian Notation And It's Distractors

Although some notable computer scientists are against it's usage, it helps some others to understand at some level the code to be writen/read. We hope that one day all used values be fully abstracted and code will be simpler to read and be understood. For the moment thats not the case for all languages and can be hell in some cases for project maintenance.

We believe using some convention like the Hungarian notation should still be used.

## Coding Scripts

At Cyb3r Web we generaly code with scripts and use this general convention for most projects. The terms can be used for most of the script languages but some variations can apply. We'll try to update the documentation for internal usage and public interest as updates and changes are made.

## CamelCase

All of the following notations use [CamelCase](http://en.wikipedia.org/wiki/CamelCase) wording for programmatical role identification.

## Variables

The notation used for variables is a **lower case prefix** followed by CamelCase wording defining the variable's role.

**aArray**

:	notation used for `array` values. Uses the prefix `a`.

**bBoolean**

:	Notation used for `boolean` values. Uses the prefix `b`.

**fFloat**

:	Notation used for `float` values. Uses the prefix `f`.

**g_Global**

:	Notation used for `global` values. Uses the prefix `g_`.

**iInteger**

:	Notation used for `integer` values. Uses the prefix `i`.

**oObject**

:	Notation used for `object` values. Uses the prefix `o`.

**hHandle**,**pPointer**,**rRessource**

:	Notation used for `ressource` values. Uses the prefix `h`, `p` or `r`.

**sString**

:	Notation used for `string` values. Uses the prefix `s`.

## Functions

**Function()**

:	Notation used for general global `Function`s is CamelCase wording.

**_subFunction()**

:	Notation used for indirect or sub procedural `Function`s. Uses a `_` followed by a lower cased word followed by CamelCase wording.

## Classes, Interfaces, Properties and Methods

Classes can be developed for different types of usages.

The general notation used for classes and its defining properties and methods are the following.

**CClass**, **C_Class** or **C_NS_AnotherClass**

:	Notation used for `Class`s is a `C` **Capital C** followed by CamelCase wording defining the class's role or
	a `C` **Capital C** followed by one `_`  **underscore** and CamelCase wording defining the class's role or
	a `C` **Capital C** followed by one `_` **underscore** followed by a **word in capitals** defining a namespace, one `_` **underscore**
	and CamelCase wording defining the class's role.

**IInterface**

:	Notation used for `Interface`s is am `I` **Capital I** followed by CamelCase wording.
	
**_xPrivateProperty**

:	Notation used for private properties is like the variables described above except they use a `_` **underscore** prefix.

**_privateMethod()**

:	Notation used for private methods uses the same notation as the **_subFunction()** described above.

**xPublicProperty**

:	Notation used for public properties uses the same notation as the variables described above.

**PublicMethod()**

:	Notation used for public methods uses the same notation as the **Function()** described above.

## Sub Definitions of Classes

Defining roles of classes can push us to use othe notations for `Class`s such as the following examples:

**TClass**, **T_Class**, **T_NS_Class**

:	Notation used like the `CClass` above but for **Templates**.

**AClass**, **A_Class**, **A_NS_Class**

:	Notation used like ht `CClass` above but for **Abstract** `Class`s.

**Copyright (C) 2006-2010 Serafim Junior Dos Santos Fagundes Cyb3r Web**