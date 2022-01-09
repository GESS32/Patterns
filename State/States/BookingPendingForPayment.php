<?php

declare(strict_types=1);

namespace State\States;

use app\Response;
use State\Enums\BookingStatusEnum;

final class BookingPendingForPayment extends AbstractBookingState
{
    public function rollbackStatus(): Response
    {
        $pendingState = new BookingClosed($this->context);

        $this->context->transitionStateTo($pendingState);

        // TODO: Implement rollbackStatus() method.
    }

    public function prepareRefundRequest(): Response
    {
        // TODO: Implement prepareRefundRequest() method.
    }

    public function preparePayRequest(): Response
    {
        // TODO: Implement preparePayRequest() method.
    }

    protected function getStatusValue(): int
    {
        return BookingStatusEnum::PAYMENT_PENDING;
    }
}