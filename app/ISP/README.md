## Interface segregation principle(Princípio da Segregação da Interface).

O quarto princípio diz que muitas interfaces específicas são melhores que uma única interface para não forçar uma classe a implementar um método que ela não vai usar. Precisamos criar pequenas interfaces mais específicas ao invés de termos uma única genérica.

### Cenário de exemplo.

Vamos criar algumas classes de aves que implementam uma interfarce.

```
/ISP/bad.php
```
Neste exemplo estamos forçando todas a aves a implementarem os mesmos métodos, o problema é que existe aves que não usam os mesmos métodos. 

```
/ISP/good.php
```
Neste exemplo vamos refatorar o código acima, dessa forma cada classe só irá implemetar os métodos que serão usados.

