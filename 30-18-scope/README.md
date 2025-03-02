# Scope Resolution Operator: `::`

O operador de resolução de escopo é usado para acessar:
* Constantes
* Método ou propriedades estáticas
* Items da classe em si (como constantes e métodos)
* Items de uma classe pai.

```php
class MyClass {
    public const CONST_VALUE = 'A constant value';
}

echo MyClass::CONST_VALUE;
```