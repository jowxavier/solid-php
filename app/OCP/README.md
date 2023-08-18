## Open/closed principle (Princípio aberto/fechado).

O segundo princípio diz que você deve ser capaz de estender um comportamento de uma classe, sem modificá-lo, a classe está aberta para expansão e fechado para alteração.

Sempre que precisarmos criar um novo recurso, devemos criar uma nova classe que implemente esse recurso.

### Cenário de exemplo.

Vamos imaginar a situação onde temos que criar uma classe para cálculo de frete.

```
/OCP/bad.php
```
Neste exemplo temos uma classe para cálculo de frete, atualmente com o método ```calculate()```, caso exista a necessidade de uma nova opção de frete seria necessário criar uma nova verificação do tipo. Esse comportamento está ferindo o principio de Aberto/Fechado.

```
/OCP/good.php
```
Neste exemplo vamos refatorar o código acima, agora para implementar um novo tipo de frete como "Free", devemos criar uma nova classe que implemente a interface de frete.

