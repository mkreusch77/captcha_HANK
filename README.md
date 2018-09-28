# CAPTCHA HANK v1.0

Projeto simples de captcha para segurança em formulários.

O projeto está organizado em 3 partes.

1 - Em um diretório ficam imagens (.gif) que animam entre 5 e 7 imagens, sendo que na última aparecerá uma palavra, essa palavra será digitada no input. As imagens (.gif) que aparecem no captcha, são apresentadas de forma randômica a cada acesso. Você pode criar seus próprios (.gifs). Os do projeto são exemplos, entretanto funcionais.

Utilizamos um hash para nomear as imagens (.gif), pois a evolução da ferramenta é contínua, e num futuro as frases também terão um hash.

2 - Um script de sua preferência como Java, Python, PHP no back-end seleciona de forma randômica as imagens que aparecerão na interface. Nesse captcha utilizamos PHP para randomizar a apresentação.

A frase que aparece nesse script PHP 'randomCaptcha.php' são as que deverão ser digitadas no input da interface para validação. Futuramente será um hash também. Você também pode evoluir a ferramenta.

3 - Na interface existe um serviço em JavaScript que chama o 'randomCaptcha.php' que por sua vez retorna uma imagem (.gif) randômica e a frase de validação, que será apresentada em uma DIV. Essa frase é a que deverá ser digitada no input para validação.
Fizemos testes com log de acesso em um site que estava recebendo spam em um formulário de contato.

Após colocar o captcha no seu formulário de contato, os envios de spans por robôs não ocorreram mais.

Faça bom proveito. Manteremos sempre o projeto evoluindo com segurança e simplicidade.


Desenvolvedores.

Marcio Kreusch -> https://github.com/mkreusch77

Handerson Pinheiro -> https://github.com/plata4m
