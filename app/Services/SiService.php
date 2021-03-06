<?php


namespace App\Services;

class SiService
{
    /**
     *  Base uri to be consumed in the Author Service
     * 
     *  @var string
     */
    public string $baseUri;

    /**
     *  Secret to be consumed in the Author Service
     * 
     *  @var string
     */
    public string $secret;

    /**
     *  Service Object to use the HttpService
     * 
     *  @var HttpService $httpService
     */
    public HttpService $httpService;

    public function __construct(HttpService $httpService)
    {
        $this->baseUri = config('services.siservice.base_uri');
        $this->secret = config('services.siservice.secret');
        $this->httpService = $httpService;
    }

    /**
     *  Get all authors
     * 
     *  @return \Illuminate\Http\Response
     */
    public function indexAuthors(): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "nisc", "GET", ["Authorization" => $this->secret]);
    }

    /**
     *  Create an author
     * 
     *  @param array $request 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function storeAuthor(array $request): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "ubid", "POST", ["Authorization" => $this->secret], $request);
    }

    /**
     *  Show an existing author
     * 
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function showAuthor(string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "nisc/{$nisc}", "GET", ["Authorization" => $this->secret]);
    }

    /**
     *  Update an existing author
     * 
     *  @param array $request
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function updateAuthor(array $request, string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "nisc/{$nisc}", "PUT", ["Authorization" => $this->secret], $request);
    }

    /**
     *  Delete an existing author
     * 
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function destroyAuthor(string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "authors/{$author}", "DELETE", ["Authorization" => $this->secret]);
    }
}