## Single responsibility principle (Princípio da responsabilidade única).

O primeiro princípio do SOLID basicamente diz que uma classe deveria ter exclusivamente uma responsabilidade.

Diz que quando temos uma classe que não atenda esse princípio, devemos dividi-la em mais classes até que isso ocorra.

### Cenário de exemplo.

Vamos imaginar a situação onde temos que criar uma classe para exibir uma mensagem para uma pessoa informando se pode beber ou não de acordo com sua idade .

```
/SRP/bad.php
```
Neste exemplo temos uma classe Pessoa que tem duas responsablidades. Receber os dados e exibir a mensagem da cordo com a idade.
Esse comportamento está ferindo o princípio de responsabilidade única.

```
/SRP/good.php
```
Neste exemplo vamos refatorar o código acima, agora criamos uma nova classe com a responsabilidade de apenas exibir a mensagem, deixando assim a classe pessoa com a responsabilidade de apenas receber os dados. Dessa forma temos duas classes e cada uma com sua responsabilidade.
