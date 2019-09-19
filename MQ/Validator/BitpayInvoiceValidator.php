<?php

namespace Wagers\MQ\Validator;

use Wagers\Enum\OperationStatusEnum;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BitpayInvoiceValidator
 */
class BitpayInvoiceValidator extends AbstractValidator
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var array
     */
    private $schema = [
        'operationId',
        'invoiceId',
        'invoiceLink',
        'service',
        'created'
    ];

    /**
     * DepositConsumer constructor.
     *
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $data
     *
     * @return string|null
     * @throws \Exception
     */
    public function validate(array $data): ?string
    {
        $constraints = new Assert\Collection([
            'operationId' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('integer')
            ]),
            'invoiceId' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('string')
            ]),
            'invoiceLink' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('string')
            ]),
            'service' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('string')
            ]),
            'created' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('string')
            ]),
        ]);

        $violations = $this->validator->validate($data, $constraints);
        $this->assertExists($violations, $data, $this->schema);

        return $this->mapViolations($violations);
    }
}
