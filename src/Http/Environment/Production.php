<?php
/**
 * This file is part of Tonolucro\Payment\Gateway\Brasilcard
 *
 * @copyright Copyright (c) Tonolucro <https://www.tonolucro.com>
 * @link https://github.com/tonolucro/payment-gateway-brasilcard-php
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tonolucro\Payment\Gateway\Brasilcard\Http\Environment;

class Production implements EnvironmentInterface
{
    const ID = "production";
    const BASE_URI = 'http://servicos.brasilcard.com/Transacao/ApiEcommerce/v1/';

    /**
     * @return string
     */
    function getId()
    {
        return self::ID;
    }

    /**
     * @return string
     */
    function getApiUri()
    {
        return self::BASE_URI;
    }
}