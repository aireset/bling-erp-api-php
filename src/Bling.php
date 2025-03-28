<?php

namespace Aireset\BlingErpApi;

use Aireset\BlingErpApi\Entities\Borderos\Borderos;
use Aireset\BlingErpApi\Entities\CamposCustomizados\CamposCustomizados;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\CanaisDeVenda;
use Aireset\BlingErpApi\Entities\CategoriasLojas\CategoriasLojas;
use Aireset\BlingErpApi\Entities\CategoriasProdutos\CategoriasProdutos;
use Aireset\BlingErpApi\Entities\CategoriasReceitasDespesas\CategoriasReceitasDespesas;
use Aireset\BlingErpApi\Entities\ContasContabeis\ContasContabeis;
use Aireset\BlingErpApi\Entities\ContasPagar\ContasPagar;
use Aireset\BlingErpApi\Entities\ContasReceber\ContasReceber;
use Aireset\BlingErpApi\Entities\Contatos\Contatos;
use Aireset\BlingErpApi\Entities\ContatosTipos\ContatosTipos;
use Aireset\BlingErpApi\Entities\Contratos\Contratos;
use Aireset\BlingErpApi\Entities\Depositos\Depositos;
use Aireset\BlingErpApi\Entities\Empresas\Empresas;
use Aireset\BlingErpApi\Entities\Estoques\Estoques;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\FormasDePagamentos;
use Aireset\BlingErpApi\Entities\GruposDeProdutos\GruposDeProdutos;
use Aireset\BlingErpApi\Entities\Homologacao\Homologacao;
use Aireset\BlingErpApi\Entities\Logisticas\Logisticas;
use Aireset\BlingErpApi\Entities\LogisticasEtiquetas\LogisticasEtiquetas;
use Aireset\BlingErpApi\Entities\LogisticasObjetos\LogisticasObjetos;
use Aireset\BlingErpApi\Entities\LogisticasRemessas\LogisticasRemessas;
use Aireset\BlingErpApi\Entities\LogisticasServicos\LogisticasServicos;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\NaturezasDeOperacoes;
use Aireset\BlingErpApi\Entities\Nfces\Nfces;
use Aireset\BlingErpApi\Entities\Nfes\Nfes;
use Aireset\BlingErpApi\Entities\Nfses\Nfses;
use Aireset\BlingErpApi\Entities\Notificacoes\Notificacoes;
use Aireset\BlingErpApi\Entities\OrdensDeProducao\OrdensDeProducao;
use Aireset\BlingErpApi\Entities\PedidosCompras\PedidosCompras;
use Aireset\BlingErpApi\Entities\PedidosVendas\PedidosVendas;
use Aireset\BlingErpApi\Entities\Produtos\Produtos;
use Aireset\BlingErpApi\Entities\ProdutosEstruturas\ProdutosEstruturas;
use Aireset\BlingErpApi\Entities\ProdutosFornecedores\ProdutosFornecedores;
use Aireset\BlingErpApi\Entities\ProdutosLojas\ProdutosLojas;
use Aireset\BlingErpApi\Entities\ProdutosVariacoes\ProdutosVariacoes;
use Aireset\BlingErpApi\Entities\PropostasComerciais\PropostasComerciais;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Situacoes\Situacoes;
use Aireset\BlingErpApi\Entities\SituacoesModulos\SituacoesModulos;
use Aireset\BlingErpApi\Entities\SituacoesTransicoes\SituacoesTransicoes;
use Aireset\BlingErpApi\Entities\Usuarios\Usuarios;
use Aireset\BlingErpApi\Entities\Vendedores\Vendedores;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;
use Aireset\BlingErpApi\Providers\IoC;
use Aireset\BlingErpApi\Repositories\IBlingRepository;

/**
 * Módulo conector à API do Bling.
 *
 * @property Borderos $borderos
 * @property CamposCustomizados $camposCustomizados
 * @property CanaisDeVenda $canaisDeVenda
 * @property CategoriasLojas $categoriasLojas
 * @property CategoriasProdutos $categoriasProdutos
 * @property CategoriasReceitasDespesas $categoriasReceitasDespesas
 * @property ContasPagar $contasPagar
 * @property ContasReceber $contasReceber
 * @property ContasContabeis $contasContabeis
 * @property Contatos $contatos
 * @property ContatosTipos $contatosTipos
 * @property Contratos $contratos
 * @property Depositos $depositos
 * @property Empresas $empresas
 * @property Estoques $estoques
 * @property FormasDePagamentos $formasDePagamentos
 * @property GruposDeProdutos $gruposDeProdutos
 * @property Homologacao $homologacao
 * @property Logisticas $logisticas
 * @property LogisticasEtiquetas $logisticasEtiquetas
 * @property LogisticasObjetos $logisticasObjetos
 * @property LogisticasRemessas $logisticasRemessas
 * @property LogisticasServicos $logisticasServicos
 * @property NaturezasDeOperacoes $naturezasDeOperacoes
 * @property Nfces $nfces
 * @property Nfses $nfses
 * @property Nfes $nfes
 * @property Notificacoes $notificacoes
 * @property OrdensDeProducao $ordensDeProducao
 * @property PedidosCompras $pedidosCompras
 * @property PedidosVendas $pedidosVendas
 * @property Produtos $produtos
 * @property ProdutosEstruturas $produtosEstruturas
 * @property ProdutosFornecedores $produtosFornecedores
 * @property ProdutosLojas $produtosLojas
 * @property ProdutosVariacoes $produtosVariacoes
 * @property PropostasComerciais $propostasComerciais
 * @property Situacoes $situacoes
 * @property SituacoesModulos $situacoesModulos
 * @property SituacoesTransicoes $situacoesTransicoes
 * @property Usuarios $usuarios
 * @property Vendedores $vendedores
 */
class Bling
{
  /** @property-read IBlingRepository $repository Repositório de conexão ao Bling. */
  private readonly IBlingRepository $repository;

  /** @property array $modules Módulos instanciados para utilização. */
  private array $modules;

  /**
   * Constrói o objeto.
   *
   * @param string $accessToken
   */
  public function __construct(string $accessToken)
  {
    $this->repository = IoC::getRepository($accessToken);
    $this->modules = [];
  }

  /**
   * Obtém um módulo através de sua assinatura (seguindo o _pattern_ `Instance`).
   *
   * @param string $entityClassName O nome da classe da entidade desejada.
   *
   * @return BaseEntity A instância da entidade.
   */
  private function getModule(string $entityClassName): BaseEntity
  {
    if (!array_key_exists($entityClassName, $this->modules)) {
      $this->modules[$entityClassName] = new $entityClassName($this->repository);
    }

    return $this->modules[$entityClassName];
  }

  /**
   * _Facade_ de busca da entidade correta.
   */
  public function __get(string $name)
  {
    return match ($name) {
      'borderos' => $this->getModule(Borderos::class),
      'camposCustomizados' => $this->getModule(CamposCustomizados::class),
      'canaisDeVenda' => $this->getModule(CanaisDeVenda::class),
      'categoriasLojas' => $this->getModule(CategoriasLojas::class),
      'categoriasProdutos' => $this->getModule(CategoriasProdutos::class),
      'categoriasReceitasDespesas' => $this->getModule(CategoriasReceitasDespesas::class),
      'contasPagar' => $this->getModule(ContasPagar::class),
      'contasReceber' => $this->getModule(ContasReceber::class),
      'contasContabeis' => $this->getModule(ContasContabeis::class),
      'contatos' => $this->getModule(Contatos::class),
      'contatosTipos' => $this->getModule(ContatosTipos::class),
      'contratos' => $this->getModule(Contratos::class),
      'depositos' => $this->getModule(Depositos::class),
      'empresas' => $this->getModule(Empresas::class),
      'estoques' => $this->getModule(Estoques::class),
      'formasDePagamentos' => $this->getModule(FormasDePagamentos::class),
      'gruposDeProdutos' => $this->getModule(GruposDeProdutos::class),
      'homologacao' => $this->getModule(Homologacao::class),
      'logisticas' => $this->getModule(Logisticas::class),
      'logisticasEtiquetas' => $this->getModule(LogisticasEtiquetas::class),
      'logisticasObjetos' => $this->getModule(LogisticasObjetos::class),
      'logisticasRemessas' => $this->getModule(LogisticasRemessas::class),
      'logisticasServicos' => $this->getModule(LogisticasServicos::class),
      'naturezasDeOperacoes' => $this->getModule(NaturezasDeOperacoes::class),
      'nfces' => $this->getModule(Nfces::class),
      'nfses' => $this->getModule(Nfses::class),
      'nfes' => $this->getModule(Nfes::class),
      'notificacoes' => $this->getModule(Notificacoes::class),
      'ordensDeProducao' => $this->getModule(OrdensDeProducao::class),
      'pedidosCompras' => $this->getModule(PedidosCompras::class),
      'pedidosVendas' => $this->getModule(PedidosVendas::class),
      'produtos' => $this->getModule(Produtos::class),
      'produtosEstruturas' => $this->getModule(ProdutosEstruturas::class),
      'produtosFornecedores' => $this->getModule(ProdutosFornecedores::class),
      'produtosLojas' => $this->getModule(ProdutosLojas::class),
      'produtosVariacoes' => $this->getModule(ProdutosVariacoes::class),
      'propostasComerciais' => $this->getModule(PropostasComerciais::class),
      'situacoes' => $this->getModule(Situacoes::class),
      'situacoesModulos' => $this->getModule(SituacoesModulos::class),
      'situacoesTransicoes' => $this->getModule(SituacoesTransicoes::class),
      'usuarios' => $this->getModule(Usuarios::class),
      'vendedores' => $this->getModule(Vendedores::class),
      default => throw new BlingInternalException("A entidade \"$name\" não existe.")
    };
  }
}
