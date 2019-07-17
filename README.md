# Sistema Base Para Sites Visão

## __Instalação__
### __Requisitos__
> 1. Possuir o Node.js instalado. [Link](https://nodejs.org/pt-br/) para instalação
> 
> 2. Instalação do Yarn - Outro gerenciador de pacote do Node (recomendado) | [Link](https://yarnpkg.com/lang/pt-br/docs/install/#windows-stable)

Na pasta raiz do projeto, execute: 

1. Instalar os pacotes do node 
```js 
    npm install
```
### __Configuração__
1. #### Renomeie o arquivo .env-exemple para .env
2. #### Altere os dados para seu ambiente de desenvolvimento, exemplo:
   ```env
    # Default Connetion DB

    HOST_DB= {seu host}
    NAME_DB= {o nome do banco do projeto}
    PASS_DB= {senha do seu ambiente}
    USER_DB= {seu usuário mysql}
    ```
> Até aqui temos seu banco de dados configurado e os pacotes node instalados

### __Banco de dados__

> O script de criação do banco de dados deve ser incluido na pasta [___docs/scripts/___](docs/scripts/)
> 
> Renomeie o arquivo para ___estrutura.sql___
> 
> Não se preoculpe se o script não é o modelo final, podemos alterar depois
>
> * #### _Existe um modelo de script genérico para sites já na pasta_
> 
> ![Modelo Banco de Dados](assets/uploads/modelo-bd.png)
>   
> * ##### O modelo é suficiente para a maioria dos sites que são feitos pela Visão

Para a inicializacao do banco de dados vamos utilizar o npm.

No seu prompt de comando, na pasta raiz :
```js
npm run create-schema
```
> Pronto, após a mensagem de sucesso no seu console, o banco de dados está configurado no ambiente
___
## O que eu possuo ?

Agora que a instalação está pronta, vamos ver um pouco do que eu possuo:
* Sou uma área adminsitrativa baseada em um template. Meu pai : [Admin **LTE**](https://adminlte.io)
* Graças a algumas modificações, aceito todas as classes do **Bootstrap 4**
* Algumas coisas em mim já estão prontas para você não ter que se preoculpar:
  * Página de Login
  * Página de Edição de Usuário
  * Menu Principal
  * Página de Cadastro (As vezes você vai tirar essa parte de mim)
  * Não Precisa se preoculpar com a segurança, se seguir tudo direitinho, vai dar bom!
> Tenho alguns modelos também que você vai amar :smirk:
>
>[___admin/modelos_pagina/___](admin/modelos_pagina/)
>
> Se achou que acabou, temos mais :scream: :
  * Algumas "baterias" estão incluidas, tudo para que a codificação seja a mais simpels possível:
    * Módulo de Upload de Imagem
    * Módulo de Cortar Imagem
    * 
