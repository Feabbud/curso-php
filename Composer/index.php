<?php
/*
Composer aula 1 - Instalando
- baixar instalador no site do composer;
- composer --version para ver se foi instalado;
- gerenciador de dependencias de projetos PHP;
- instalação no projeto:
  - fizemos o composer init na pasta do projeto;
  - colocamos nosso nome (github) e o nome do projeto;
  - colocamos a descrição do pacote;
  - o nome do autor. Se usamos o git no projeto, o autor por padrão é o usuáro do git que que está sendo usado;
  - Minimum Stability: em branco. informa se quer pacotes em fase de testes ou estáveis;
  - package type: library | project | metapackage | composer-plugin;
  - license - deixar em branco.

Composer aula 2 - Gerenciando dependências
- buscar os pacotes no site packagist.org, repositório central mas não único;
- para instalar pacotes usamos o composer require <nome-do-pacote> - isso faz com que o nome do pacote vá para o json;
- composer.json declara toda a estrutura e os pacotes do nosso projeto;
- para instalar pacotes que já estão no composer.json e não foram instalados faremos: composer install;
- para atualizar os pacotes para versões mais novas, faremos - composer update;
- separamos em uma pasta src nosso código das classes para organizar melhor.

Composer Aula 3 - Entendendo o Autoload
- site PHP-fig-org.org para ver os padrões PSR-4
- configurando o autoload no json:
  "autoload": {
        "psr-4": {
            "namespacepadrão\\" : "diretório onde estão nossas classes" 
        }
  - depois atualizamos o autoload com: composer dump-autoload
  
  Classmap - informa que existe uma classe em determinado diretório
  - colocamos o classmap no arquivo json dentro do autoload:
        "classmap": [
            "./Teste.php"
        ],
  - faremos o composer dump-autoload para atualizar;
  - informa o autoload que temos que carregar o arquivo escrito no array classmap.
  
  Files - informa que existe arquivos isolados para serem carregados pelo autoload
  - colocamos o código no json:
        "files": [
            "arquivoDefunções.php"
        ],
  - faremos o composer dump-autoload;
  - informa o autoload que temos que carregar esse arquivo para usarmos.



*/