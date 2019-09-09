<?php

namespace Wagers\Enum;

/**
 * Class OperationStatusEnum
 */
abstract class OperationStatusEnum extends AbstractEnum
{
    const OPERATION_STATUS_NEW = 'NEW';
    const OPERATION_STATUS_PROCESS = 'PROCESS';
    const OPERATION_STATUS_SUCCESS = 'SUCCESS';
    const OPERATION_STATUS_REJECT = 'REJECT';
    const OPERATION_STATUS_FAIL = 'FAIL';
}
