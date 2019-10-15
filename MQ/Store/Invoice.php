<?php

namespace Wagers\MQ\Store;

/**
 * Class Invoice
 */
class Invoice extends AbstractMessage
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
     * @return Invoice
     */
    public function setOperationId(int $id): self
    {
        $this->operationId = $id;
        return $this;
    }

    /**
     * @param string $id
     *
     * @return Invoice
     */
    public function setInvoiceId(string $id): self
    {
        $this->invoiceId = $id;
        return $this;
    }

    /**
     * @param string $link
     *
     * @return Invoice
     */
    public function setInvoiceLink(string $link): self
    {
        $this->invoiceLink = $link;
        return $this;
    }
}
