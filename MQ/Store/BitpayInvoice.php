<?php

namespace Wagers\MQ\Store;

/**
 * Class BitpayInvoice
 */
class BitpayInvoice extends AbstractMessage
{
    /**
     * @var int
     */
    public $operationId;

    /**
     * @var string
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceLink;

    /**
     * @param int $id
     *
     * @return BitpayInvoice
     */
    public function setOperationId(int $id): self
    {
        $this->operationId = $id;
        return $this;
    }

    /**
     * @param string $id
     *
     * @return BitpayInvoice
     */
    public function setInvoiceId(string $id): self
    {
        $this->invoiceId = $id;
        return $this;
    }

    /**
     * @param string $link
     *
     * @return BitpayInvoice
     */
    public function setInvoiceLink(string $link): self
    {
        $this->invoiceLink = $link;
        return $this;
    }
}
