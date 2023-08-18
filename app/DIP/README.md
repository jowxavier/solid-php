## Dependency inversion principle (Princípio da inversão da dependência).

O último e quinto princípio diz para que uma classe dependa de uma abstração e não de uma implementação..

### Cenário de exemplo.

Vamos criar um método de enviao de mensagens.

```
/ISP/bad.php
```
Neste exemplo temos o que chamamos de acoplamento e uma dependência da classe Notificação cria uma instancia da classe Email dentro dela. E o metodo enviar faz a utilização da classe Email para enviar a notificação por e-mail. Isso fere o princípio da inversão da dependência, porque não desenvolvemos a classe Notificação para uma abstração, e sim para uma implementação já que classe E-mail implementa a lógica para o envio do e-mail.

```
/ISP/good.php
```
Neste exemplo vamos refatorar o código acima criando uma interface de modo que a Classe Notificação dependa de uma abstração, e o método enviar não mais dependa de uma implementação.  

