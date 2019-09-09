<?php

namespace Wagers\MQ\Validator;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Class AbstractValidator
 */
abstract class AbstractValidator
{
    /**
     * @param ConstraintViolationListInterface $violationList
     *
     * @return string|null
     */
    protected function mapViolations(ConstraintViolationListInterface $violationList): ?string
    {
        if ($violationList->count()) {
            $errors = [];
            /** @var ConstraintViolationInterface $violation */
            foreach ($violationList as $violation) {
                $errors[] = [
                    $violation->getPropertyPath() => $violation->getMessage()
                ];
            }

            return \json_encode($errors, true);
        }

        return null;
    }

    /**
     * @param ConstraintViolationListInterface $violationList
     * @param array                            $data
     * @param array                            $schema
     */
    protected function assertExists(ConstraintViolationListInterface $violationList, array $data, array $schema): void
    {
        foreach ($schema as $field) {
            if (!\array_key_exists($field, $data)) {
                $violationList->add(new ConstraintViolation(
                    'Field does not exists.',
                    null,
                    [],
                    'foo.bar',
                    $field,
                    'invalidValue'
                ));
            }
        }
    }

    /**
     * @param array $data
     *
     * @return string|null
     */
    public abstract function validate(array $data): ?string;
}
