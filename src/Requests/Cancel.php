<?php

/**
 * This file is part of the "cashbox/foundation" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2023 Andrey Helldar
 * @license MIT
 *
 * @see https://cashbox.city
 */

declare(strict_types=1);

namespace Cashbox\BankName\Technology\Requests;

class Cancel extends BaseRequest
{
    protected $path = '/api/cancel';

    protected $reload_relations = true;

    public function getRawBody(): array
    {
        return [
            'PaymentId' => $this->model->getExternalId(),

            'Amount' => $this->model->getSum(),
        ];
    }
}
