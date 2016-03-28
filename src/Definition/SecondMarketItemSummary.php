<?php

namespace Petslane\Bondora\Definition;

class SecondMarketItemSummary extends Definition {

    /**
     * Item unique identifier
     *
     * @var string
     */
    public $Id;


    /**
     * Number
     *
     * @var int
     */
    public $Number;


    /**
     * Item start date
     *
     * @var \DateTime
     */
    public $StartDate;


    /**
     * Planned close date
     *
     * @var \DateTime
     */
    public $PlannedCloseDate;


    /**
     * Actual close date
     *
     * @var \DateTime
     */
    public $ActualCloseDate;


    /**
     * User cancelled on
     *
     * @var \DateTime
     */
    public $UserCancelledOn;


    /**
     * LoanPart being sold
     *
     * @var string
     */
    public $LoanPart_id;


    /**
     * Discount rate percent
     *
     * @var float
     */
    public $DesiredDiscountRate;


    /**
     * Discount rate as fraction (0.0 - 1.0)
     *
     * @var float
     */
    public $DesiredDiscountRateDecimalFraction;


    /**
     * Current status code
     *     0 Created
     *     1 Open in marketplace
     *     2 Successfully sold
     *     3 Failed
     *
     * Enum: 0, 1, 2, 3
     *
     * @var int
     */
    public $StatusCode;

}

