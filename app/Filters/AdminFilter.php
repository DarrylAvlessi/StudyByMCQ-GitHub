<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Filters\RequestInterface;
use CodeIgniter\Filters\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session=session();
        if(!$session->has('pseudoAdmin')){
            redirect()->to(site_url('/accederAdmin'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response)
}