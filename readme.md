##Trabalho IHC
###Pró Inclusão JF: Mobile

Nós criamos um protótipo interativo no Figma e também implementamos as quase todas as telas
que estão no protótipo.

As telas foram feitas com HTML, CSS e JS normais, mas tendo em mente o tamanho
da tela de um celular, então se for rodar local, aperte F12 e selecione as telas pequenas, pois para esse trabalho
não fizemos nada pensando em tela grande, então pode ficar estranho.

Para ver o protótipo, entre nesse link: [Projeto IHC Figma](https://www.figma.com/proto/0za7rLboUmT0UfFYSLZ4jq/IHC?node-id=7%3A0&scaling=scale-down)

As telas implementadas estão exatamente iguais ao protótipo, mas se quiser rodar localmente para ver o banco
de dados funcionando, o siga o guia abaixo: 

####Rodando o projeto localmente
1. Baixar/clonar o projeto
2. Certifique-se de que o  [Composer](https://getcomposer.org/) está instalado na sua máquina
e rode o comando `composer install` na pasta raiz do projeto
3. Certifique-se de que o [Npm](https://nodejs.org/en/) está instalado na sua máquina e rode um 
`npm install` na pasta raiz do projeto
4. Instale um banco de dados na sua máquina, pode ser o [MySQL](https://www.mysql.com/) ou qualquer
 outro de sua preferência.
    - Vamos configurar o banco: primeiro, entre numa conexão local e crie uma database com o nome
    `ihc`
    - Copie o arquivo `env.example` e renomeie para `.env`. Ali vão ter algumas configurações. Assumindo
    que o seu local é igual ao nosso, vai estar tudo certo, mas dê uma olhada nas keys `DB_` 
    e configure o usuário, senha e essas coisas para as suas credenciais
    - Rode o comando `php artisan migrate` para subir as bases de dado
    - Tente popular as colunas de Instituições e Pessoas com algumas coisas para ver que o
    banco funciona
5. Acho que isso é tudo. Qualquer dúvida fale com a gente.
