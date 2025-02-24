# Arrays

No PHP, um array é um mapa ordenado, sempre utilizando chave e valor.
Pode ser tratado como
* array
* list (vetor)
* hash table (tabela hash)
* dicionário
* coleção
* pilha
* fila

## Declarando Arrays
Os arrays podem ser declarados da seguinte forma
```php
$frutas = array('maçã', 'banana', 'laranja');
```

ou

```php
$frutas = ['maçã', 'banana', 'laranja'];
```

## Acessando Elementos
Os elementos podem ser acessados através da chave, utilizando colchetes
```php
$frutas = ['maçã', 'banana', 'laranja'];
echo $frutas[0]; // maçã
```

## Adicionando Elementos
Podemos adicionar elementos ao array da seguinte forma
```php
$frutas   = ['maçã', 'banana', 'laranja'];
$frutas[] = 'abacaxi';
```

## Algumas funções úteis

Realizar a contagem de elementos
```php
$frutas = ['maçã', 'banana', 'laranja'];
echo count($frutas); // 3
```

Adicionar elementos no início do array
```php
$frutas = ['maçã', 'banana', 'laranja'];
array_unshift($frutas, 'abacaxi');
```

Remover elementos no início do array
```php
$frutas = ['maçã', 'banana', 'laranja'];
array_shift($frutas);
```

Adicionar elementos no final do array
```php
$frutas = ['maçã', 'banana', 'laranja'];
array_push($frutas, 'abacaxi');
```

Remover elementos no final do array
```php
$frutas = ['maçã', 'banana', 'laranja'];
array_pop($frutas);
```
