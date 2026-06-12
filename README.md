## Sistema de controle de usuários

O objetivo do sistema é aprendermos ao controle de cadastro, edição e exclusão do usuário.
Além de aprendermos a processo de segurança, em controle de login e sessões.
Alimentar o aprendizado na iniciação do uso do XAMPP, usando php e sql.

## Tecnologias Ultilizadas

Foi ultilizado no projeto:
- Ambiente do XAMPP.
- Linguagens: php, sql, html, css.
- Framework: bootstrap.

## Estrutura das Pastas

Usamos a seguinte estrutura:

assets:
- Style.css
(Para customização e layout das páginas.)

infra:
- connect.php
- script.sql
(Para conexão do sql, e criação do banco de dados.)

public:
components:
- footer.php
- header.php
- sessao.php
- table.php
(Arquivos que se repetem muitas vezes no código, foram separados para usar include e ajudar na economia de linhas.)

- cadastrar, editar, excluir, home, logout, validacao, validacaosair. php
(Páginas com as funcionalidades, e também, páginas de validação de ações.) 

index
(Primeira página a ser procurada pelo navegador, no qual contem a página de login.)

## Explicação das Funcionalidades

- Cadastrar: Cadastra o usuário no Banco de dados.
- Editar: Edita o usuário ou login, ou os dois.
- Excluir: Excluir um cadastro do banco de dados.

## Melhorias Implementadas

- Máscara de senha do listagem.
- ultilização de css para melhorar a aparência do sistema.
- Organização dos arquivos em pastas.
- Controle de acesso às páginas através da sessão.
- logout com confirmação.
- Confirmação ao excluir usuário.
- Aparição do usuário e senha ao editar.

## Instruções para execução do sistema

Ao passar pelo Login, você encontrará a página de home, onde na aba de navegação, você entrontrará opções de voltar à página inicial,opções de ir à página de cadastro e sair.
No centro da página você vê a tabela dos usuarios, contendo: usuário, senha, botões de editar e excluir, clicando neles pode executar as ações da página, na página de cadastrar, você pode cadastrar usuário no banco de dados, e na aba sair, voce volta à página de login.