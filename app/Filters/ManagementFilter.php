<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class ManagementFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {

        $logged = !empty(session("id_user")) && !empty(session("username")) && !empty(session("last_login")) && !empty(session("token"));
        
        if(!$logged) return redirect('webauth');
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}