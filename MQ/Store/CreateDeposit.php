<?php

namespace Wagers\MQ\Store;

/**
 * Class CreateDeposit
 */
class CreateDeposit extends AbstractMessage
{
    /**
     * @var int
     */
    public $operationId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userEmail;

    /**
     * @var float
     */
    public $amount;

    /**
     * @param int $id
     *
     * @return CreateDeposit
     */
    public function setOperationId(int $id): self
    {
        $this->operationId = $id;
        return $this;
    }

    /**
     * @param int $id
     *
     * @return CreateDeposit
     */
    public function setUserId(int $id): self
    {
        $this->userId = $id;
        return $this;
    }

    /**
     * @param string $email
     *
     * @return CreateDeposit
     */
    public function setUserEmail(string $email): self
    {
        $this->userEmail = $email;
        return $this;
    }

    /**
     * @param float $amount
     *
     * @return CreateDeposit
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
