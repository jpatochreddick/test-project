<?php
namespace Application\Delivery\Input;

use Psr\Http\Message\ServerRequestInterface as Request;

class ShowText
{
    public function __invoke(Request $request)
    {
        $get = $request->getParsedBody();

        return [$get['text']];
    }
}