# Projeto interdisciplinar

Sistema de gerenciamento de uma mecânica de carros (Projeto acadêmico) 

No 4º semestre de Análise e Desenvolvimento de Sistemas, na Unifasipe Visando auxiliar o meu pai em sua oficina mecânica, tive a ideia de desenvolver um  sistema web para o gerenciamento de uma oficina mecânica, junto com um colega.  no sistema havia: cadastro de usuários do sistema (com permissões), cadastro de  clientes, cadastro de serviços e funções para gerar relatórios.

Utilizando das seguintes tecnologias: Html 5, Css 3, JavaScript, Bootstrap, jquery, Php 7, Laravel, entre outras...

## Requisitos.

  ● APACHE.
  
  ● PHP 5.6 ou superior.
  
  ● MYSQL.
  
## Instalação.

Para clonar o projeto:

  ● git clone https://github.com/MichaelHeming25/projeto_interdisciplinar

Para instalar as dependencias

    composer install

Atualize as informações do banco de dados no '.env' (caso não tenha, crie um arquivo '.env' com base no arquivo '.env.example').

Para migrar as tabelas do projeto para o seu banco de daods:

    php artisan migrate
  
## Execução

Para rodar o projeto:

    php artisan serve
