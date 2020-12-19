# Design Patterns
![Build Status](https://travis-ci.org/emielschumacher/php-design-patterns.svg?branch=main) [![codecov](https://codecov.io/gh/emielschumacher/php-design-patterns/branch/main/graph/badge.svg?token=3XMKKMOAFQ)](https://codecov.io/gh/emielschumacher/php-design-patterns)

A collection of design pattern examples written in PHP. The patterns are conceptual to other programming languages.

---

## Simple Factory Pattern
The Simple Factory Pattern is a **creational pattern** which is used to create an instance of an object for the client rather than instantiating an object directly. The created object could be of different types.

In the code example, `SimpleFactoryTest` class is using the `VehicleFactory` class to create objects which implements `VehicleInterface` like `Car` and `Motor` do.

### Structure
- **Client**

  `SimpleFactoryTest` class uses the Creator to receive a Concrete Product.
- **Creator**
  
  `VehicleFactory` is the class that creates the Concrete Product object.
- **Product Interface**

  `VehicleInterface` is an abstraction used by the Creator to define the products.
- **Concrete Product**
  
  `Car` and `Motor` classes are implementing the Product Interface. These can be created by the Creator and given back to the client.


## Abstract Factory Pattern
The Abstract Factory Pattern is a **creational pattern** which is used to create series of related objects without specifying their concrete classes.

In the code example, `AbstractFactoryTest` calls `createSmartphone()` on the `AppleSmartphoneFactory` and `MicrosoftSmartphoneFactory`, which both creates and returns a `SmartphoneInterface` object.   

### Structure
- **Client**

  `AbstractFactoryTest` class uses the Concrete Factory to receive a Concrete Product.
- **Abstract Factory**

  `SmartphoneFactoryInterface` provides an abstract interface for creating a series of Products. All the Concrete Factory classes must implement this interface to be able to produce Concrete Product objects.
- **Concrete Factory**
  
  `AppleSmartphoneFactory` and `MicrosoftSmartphoneFactory` classes both implements the Abstract Factory interface. The Client uses one of these factories, so the Client never need to instantiate a Concrete Product directly.
- **Abstract Product**

  `SmartphoneInterface` class provides an abstract interface for the Concrete Product classes.
- **Concrete Product**

  `Iphone` and `WindowsPhone` classes are the objects the Concrete Factory classes produces.


## Factory Method Pattern
The Factory Method Pattern is a **creational pattern** which is used to create an object, but lets subclasses decide which class to instantiate.

In the code example,

### Structure


## Decorator Pattern
The Decorator  Pattern is a **structural pattern** which is used to add behavior to a class dynamically. The pattern uses object composition over inheritance.

In the code example, the `ConcertTicket` class calculates the price and shows the description in different ways by the `ConcertTicketDecorator` class and it's child classes `EarlyBird` and `MeetAndGreet`.

### Structure
- **Component Interface**

    `ConcertTicketInterface` is an abstraction of what to decorate.
- **Concrete Component**

    `ConcertTicket` is the class to add behavior to. It implements the Component Interface.

- **Decorator**

  `ConcertTicketDecorator` class instantiates the Concrete Component class of which will be decorated.

- **Concrete Decorator**

  `EarlyBirdDecorator` and `MeetAndGreetDecorator` are subclasses of Decorator. It delegates to the Concrete Component class and adds new behavior.

## Strategy Pattern
The Strategy Pattern is a **behavioral pattern** which is used to encapsulate algorithms(strategies) and interchange between them.

In the code example, the `Payment` class delegates an algorithm to different `StrategyInterface` objects. `Payment` class calls an algorithm on a `StrategyInterface` object, which performs the algorithm and returns the result to `Payment` class.

### Structure
- **Context**
  
  `Payment` class doesn't implement an algorithm directly, but refers to the Strategy Interface to perform an algorithm, which means the algorithm is encapsulated.
- **Strategy Interface**

  `StrategyInterface` is an encapsulated family of algorithms.
- **Concrete Strategy**
  
  `CardPaymentStrategy`, `CashPaymentStrategy` and `MobileDevicePaymentStrategy` classes implements the Strategy Interface and makes it an encapsulated algorithm.


  
