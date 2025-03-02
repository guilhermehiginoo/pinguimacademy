# Polimofismo

Polimorfismo em orientação a objetos é o princípio que permite que classes derivadas de
uma mesma superclasse tenham métodos iguais(com mesma nomenclatura e parâmetros),
mas comportamentos diferentes, redefinidos em cada uma das classes-filha.

<sub><sup>
Ribeiro, David Barbosa et al. __Programando com orientação a objetos__. 2012.
Disponível em <https://ned.unifenas.br/cursosgratuitos/2012/poo/polimorfismo.html#:~:text=Polimorfismo%20em%20orienta%C3%A7%C3%A3o%20a%20objetos,cada%20uma%20das%20classes%2Dfilha.>
</sup></sub>

```php
class Animal {
    public function falar() {
        return "Som";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Latido";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Miado";
    }
}
```
