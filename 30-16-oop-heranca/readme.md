# Herança

Na programação orientada a objetos, a herança é um mecanismo que permite que uma classe herde atributos e métodos de outra classe. A classe que herda é chamada de classe filha ou subclasse, e a classe que é herdada é chamada de classe pai ou superclasse.

A herança é uma forma de reutilização de código, pois permite que você crie uma nova classe a partir de uma classe existente. A nova classe herda todos os atributos e métodos da classe existente e pode adicionar novos atributos e métodos ou modificar os existentes.

```php
class Animal {}

class Cachorro extends Animal {}
```

## Visibilidade dos atributos / métodos
Como mostrado na última aula, os objetos podem ser
* __Públicos__: acessíveis de qualquer lugar
* __Protegidos__: acessíveis apenas dentro da classe e subclasses
* __Privados__: acessíveis apenas dentro da classe