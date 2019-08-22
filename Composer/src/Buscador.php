<?php
  namespace Alura\BuscadorDeCursos;
  
  use \GuzzleHttp\Client;
  use \Symfony\Component\DomCrawler\Crawler;

  class Buscador{
    private $httpClient;
    private $crawler;

    public function __construct(Client $httpClient, Crawler $crawler)
    {
      $this->httpClient = $httpClient;
      $this->crawler = $crawler;
    }

    public function buscar(string $url) : array
    {
      $resposta = $this->httpClient->request('GET', $url);

      $html = $resposta->getBody();
      $this->crawler->addHtmlContent($html);

      $elementoCurso = $this->crawler->filter('span.card-curso__nome');
      $cursos = [];

      foreach ($elementoCurso as $elemento) {
        $cursos[] = $elemento->textContent;
      }

      return $cursos;
    }
  }