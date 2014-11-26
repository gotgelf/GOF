# Object Behavioral: Strategy

## Intent

Define a family of algorithms, encapsulate each one, and make them interchangeable. 

Strategy lets the algorithm vary independently from clients that use it.

## Applicability

Use the Strategy pattern when

* many related classes differ only in their behavior. Strategies provide a way to configure a class with one of manny  
  behaviors.
* you need different variants of an algorithm. For example, you might define algorithms reflecting different space/time
  trade-offs. Strategies can be used when these variants are implemented as a class hierarchy of algorithms.
* an algorithm uses data that clients shouldn't know about. Use the Strategy pattern to avoid exposing complex, 
  algorithm-specific data structures.
* a class defines many behaviours, and these appear as multiple conditional statements in its operations. Instead of
  many conditionals, move related conditional branches into their own Strategy class.
  
## Participants
  
* **Strategy** (Compositor)
    * declares an interface common to all supported algorithms. Context(Composition) uses this interface to call the
      algorithm defined by a  ConcreteCompositor.
  
  
* **ConcreteCompositor** (Strategy)
    * implements the algorithm using Compositor interface.
  

* **Context** (Composition)
    * is configured with a ConcreteCompositor object.
    * maintains a reference to a Strategy(Compositor) object.
    * may define an interface that lets Strategy access its data.
    
## Code
    
To instantiate Composition, you pass it the compositor you want to use:

```php
   
    $composition = new Composition(new SimpleCompositor());
    $composition = new Composition(new TeXCompositor());
    $composition = new Composition(new ArrayCompositor(100));
     
```     