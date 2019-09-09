<?php

namespace Wagers\MQ\Store;

/**
 * Class UpdateDeposit
 */
class UpdateDeposit extends AbstractMessage
{
    /**
     * @var int
     */
    public $operationId;

    /**
     * @var string
     * @see See Bitpay InvoiceInterface for available statuses.
     */
    public $status;

    /**
     * @var float
     */
    public $amount;

    /**
     * @param int $id
     *
     * @return UpdateDeposit
     */
    public function setOperationId(int $id): self
    {
        $this->operationId = $id;
        return $this;
    }

    /**
     * @param string $status
     *
     * @return UpdateDeposit
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param float $amount
     *
     * @return UpdateDeposit
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
