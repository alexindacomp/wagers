<?php

namespace Wagers\MQ\Validator;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CreateDepositValidator
 */
class CreateDepositValidator extends AbstractValidator
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
        'userId',
        'userEmail',
        'amount',
        'action',
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
     */
    public function validate(array $data): ?string
    {
        $constraints = new Assert\Collection([
            'operationId' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('integer')
            ]),
            'userId' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('integer')
            ]),
            'userEmail' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Email()
            ]),
            'amount' => new Assert\Optional([
                new Assert\NotNull(),
            ]),
            'service' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\Type('string')
            ]),
            'created' => new Assert\Optional([
                new Assert\NotNull(),
                new Assert\DateTime('Y-m-d H:i')
            ]),
        ]);

        $violations = $this->validator->validate($data, $constraints);
        $this->assertExists($violations, $data, $this->schema);

        return $this->mapViolations($violations);
    }
}
