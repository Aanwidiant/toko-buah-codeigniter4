<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LevelFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('login');
        }


        $lv_id = session()->get('lv_id');
        if ($lv_id === 'lv_01') {
            $forbiddenRoutes = [
                'dashboard/adm',
                'user',
                'user/*',
                'product',
                'product/*'
            ];

            $currentRoute = $request->uri->getPath();

            if (in_array($currentRoute, $forbiddenRoutes)) {
                return redirect()->to('dashboard/usr');
            }
        }

        return $request;
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
