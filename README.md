# CAPTCHA HANK v1.0

Projeto simples de captcha para segurança em formulários.

O projeto está organizado em 3 partes.

1 - Em um diretório ficam imagens (.gif) que animam entre 5 e 7 imagens, sendo que na última aparece a palavra para validação no input.
As imagens (.gif) que aparecem no captcha são randômicas. Uma função para controlar a randomização foi montada. 
Você pode criar seus próprios (.gifs) também. Utilizamos um hash para nomear as imagens (.gif), pois a evolução da ferramenta é contínua, e num futuro as frases também terão hash.

2 - Um script de sua preferência como Java, Python, PHP fica no back-end selecionando de forma randômica as imagens que aparecerão na interface. Como exemplo para compartilhar, fizemos em PHP.

3 - Um javascript no index.html chama o serviço de geração randômica das imagens (.gif) no back-end, que são apresentadas em uma <div> de forma aleatória na interface. 

Fizemos testes com log de acesso em um site que estava recebendo spam em um formulário de contato.

Após colocar o captcha em um site que estava recebendo muitos spans em seu formulário de contato, os envios de e-mails por robôs pararam. 

Faça bom proveito. 
Manteremos sempre o projeto evoluindo com segurança e simplicidade. 

Desenvolvedores.
Marcio Kreusch
Handerson Pinheiro
