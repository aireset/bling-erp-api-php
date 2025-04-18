- [Versão em JS/TS](https://github.com/AlexandreBellas/bling-erp-api-js)
- Versão em C# (em breve)

# Bling ERP API - PHP

Pacote de integração com a [API v3 do ERP Bling](https://developer.bling.com.br)
para PHP 8.2+. O mais completo existente.

Atualizado com a versão `v310` da API ([veja o registro de alterações](https://developer.bling.com.br/changelogs#2024-10-02)).

## Instalação

Para instalar, execute o comando:

```bash
composer require aireset/bling-erp-api
```

## Criação de uma nova conexão

Para criar uma conexão ao serviço do Bling, basta instanciar o objeto com a [API key](https://developer.bling.com.br/autenticacao) em seu construtor.

```php
use Aireset\BlingErpApi\Bling;

$apiKey = "sua_api_key";
$blingConnection = new Bling($apiKey);
```

Vale destacar que o fluxo de criação e autorização do aplicativo **não é feito
pela biblioteca**. Ou seja, a biblioteca somente recebe o `access_token` gerado
a partir do _endpoint_ `/token`. [Veja a referência](https://developer.bling.com.br/aplicativos#tokens-de-acesso).

Para entender na prática como a autenticação citada acima funciona, [veja o
projeto de demonstração](https://github.com/AlexandreBellas/bling-erp-api-php/tree/v1.13.1/demo).

## Entidades disponíveis

Todas as entidades do Bling atualmente são permitidas para interação. São elas:

- [x] Borderos (`->borderos`)
- [x] Campos customizados (`->camposCustomizados`)
- [x] Canais de Venda (`->canaisDeVenda`)
- [x] Categorias - Lojas (`->categoriasLojas`)
- [x] Categorias - Produtos (`->categoriasProdutos`)
- [x] Categorias - Receitas e Despesas (`->categoriasReceitasDespesas`)
- [x] Contas a Pagar (`->contasPagar`)
- [x] Contas a Receber (`->contasReceber`)
- [x] Contas Contábeis (`->contasContabeis`)
- [x] Contatos (`->contatos`)
- [x] Contatos - Tipos (`->contatosTipos`)
- [x] Contratos (`->contratos`)
- [x] Depósitos (`->depositos`)
- [x] Empresas (`->empresas`)
- [x] Estoques (`->estoques`)
- [x] Formas de pagamento (`->formasDePagamento`)
- [x] Grupos de produtos (`->gruposDeProdutos`)
- [x] Homologação (`->homologacao`)
- [x] Logísticas (`->logisticas`)
- [x] Logísticas - Etiquetas (`->logisticasEtiquetas`)
- [x] Logísticas - Objetos (`->logisticasObjetos`)
- [x] Logísticas - Remessas (`->logisticasRemessas`)
- [x] Logísticas - Serviços (`->logisticasServicos`)
- [x] Naturezas de Operações (`->naturezasDeOperacoes`)
- [x] Notas Fiscais de Consumidor Eletrônicas (`->nfces`)
- [x] Notas Fiscais de Serviço Eletrônicas (`->nfses`)
- [x] Notas Fiscais Eletrônicas (`->nfes`)
- [x] Notificações (`->notificacoes`)
- [x] Ordens de produção (`->ordensDeProducao`)
- [x] Pedidos - Compras (`->pedidosCompras`)
- [x] Pedidos - Vendas (`->pedidosVendas`)
- [x] Produtos (`->produtos`)
- [x] Produtos - Estruturas (`->produtosEstruturas`)
- [x] Produtos - Fornecedores (`->produtosFornecedores`)
- [x] Produtos - Lojas (`->produtosLojas`)
- [x] Produtos - Variações (`->produtosVariacoes`)
- [x] Propostas comerciais (`->propostasComerciais`)
- [x] Situações (`->situacoes`)
- [x] Situações - Módulos (`->situacoesModulos`)
- [x] Situações - Transições (`->situacoesTransicoes`)
- [x] Usuários (`->usuarios`)
- [x] Vendedores (`->vendedores`)

## Exemplo de uso

Para listar seus produtos, basta executar:

```php
use Aireset\BlingErpApi\Bling;

$apiKey = "sua_api_key";
$blingConnection = new Bling($apiKey);

$products = $blingConnection->produtos->get();

var_dump($products);
```

## Executando os testes do projeto

Faça o clone do projeto, instale as dependências e execute:

```bash
vendor/phpunit/phpunit/phpunit -c phpunit.xml
```

## Contribuindo ao projeto

- [Guia de contribuição](https://github.com/AlexandreBellas/bling-erp-api-php/blob/v1.13.1/CONTRIBUTING.md)
- [Apoie o projeto](https://www.paypal.com/donate/?hosted_button_id=G2NJKZ5MUMKBS)
