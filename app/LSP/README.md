## Liskov substitution principle(Princípio da Substituição de Liskov).

O terceiro princípio diz que uma classe derivada deve ser substituível por sua classe base.

### Cenário de exemplo.

Vamos imaginar a situação onde temos uma classe Pessoa "base" e uma classe Pai "derivada".

```
/OCP/bad.php
```
Neste exemplo temos uma classe Pai "derivada" que extende Pessoa "base", porém a classe Pai sobrescreve o método ```getName()``` esse método não faz nada, ou lança uma exceção, ou retorna algo diferente. Esse comportamento está feriando o princípio de substituição de Liskov.

```
/OCP/good.php
```
Neste exemplo vamos refatorar o código acima, onde a classe Pai "derivada" sobrescreva corretamente o método ```getName()``` dessa forma sendo possível a classe ser subsituída pela classe Pessoa "base"

