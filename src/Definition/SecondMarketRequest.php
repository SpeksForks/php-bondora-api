<?php

namespace Petslane\Bondora\Definition;

/**
 * Request object for filtering secondary market
 */
class SecondMarketRequest extends Definition {

    /**
     * Loan issued start date from
     *
     * @var \DateTime
     */
    public $LoanIssuedDateFrom;


    /**
     * Loan issued start date to
     *
     * @var \DateTime
     */
    public $LoanIssuedDateTo;


    /**
     * Remaining principal amount min
     *
     * @var float
     */
    public $PrincipalMin;


    /**
     * Remaining principal amount max
     *
     * @var float
     */
    public $PrincipalMax;


    /**
     * Interest rate min
     *
     * @var float
     */
    public $InterestMin;


    /**
     * Interest rate max
     *
     * @var float
     */
    public $InterestMax;


    /**
     * Loan lenght min
     *
     * @var int
     */
    public $LengthMax;


    /**
     * Loan lenght max
     *
     * @var int
     */
    public $LengthMin;


    /**
     * Is overdue
     *
     * @var bool
     */
    public $HasDebt;


    /**
     * Loan status code
     *     2 Current
     *     100 Overdue
     *     5 60+ days overdue
     *
     * @var int[]
     */
    public $LoanStatusCode;


    /**
     * Principal debt amount min
     *
     * @var float
     */
    public $LatePrincipalAmountMin;


    /**
     * Principal debt amount max
     *
     * @var float
     */
    public $LatePrincipalAmountMax;


    /**
     * Price amount min
     *
     * @var float
     */
    public $PriceMin;


    /**
     * Price amount max
     *
     * @var float
     */
    public $PriceMax;


    /**
     * Use of loan
     *
     * Enum: 0, 1, 2, 3, 4, 5, 6, 7, 8, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, -1
     *
     * @var int
     */
    public $UseOfLoan;


    /**
     * Has been rescheduled
     *
     * @var bool
     */
    public $HasNewSchedule;


    /**
     * Two letter iso code for country of origin: EE, ES, FI
     *
     * @var string[]
     */
    public $Countries;


    /**
     * Bondora's rating: AA, A, B, C, D, E, F, HR
     *
     * @var string[]
     */
    public $Ratings;


    /**
     * Minimum credit score
     *
     * @var int
     */
    public $CreditScoreMin;


    /**
     * Maximum credit score
     *
     * @var int
     */
    public $CreditScoreMax;


    /**
     * Borrower's username
     *
     * @var string
     */
    public $UserName;


    /**
     * Borrower's gender: Male 0, Female 1, Unknown 2
     *
     * @var int
     */
    public $Gender;


    /**
     * Minimal age
     *
     * @var int
     */
    public $AgeMin;


    /**
     * Maximum age
     *
     * @var int
     */
    public $AgeMax;


    /**
     * Income verification type
     *
     * Enum: 1, 2, 3, 4
     *
     * @var int
     */
    public $IncomeVerificationStatus;


    /**
     * Can find your own items from market: Value Null = ALL, True = only your items, False = other user items
     *
     * @var bool
     */
    public $ShowMyItems;


    /**
     * Can find specific auction from market
     *
     * @var string
     */
    public $AuctionId;


    /**
     * Date when item was published from
     *
     * @var \DateTime
     */
    public $ListedOnDateFrom;


    /**
     * Date when item was published to
     *
     * @var \DateTime
     */
    public $ListedOnDateTo;


    /**
     * Principal debt started date from
     *
     * @var \DateTime
     */
    public $DebtOccuredOnFrom;


    /**
     * Principal debt started date to
     *
     * @var \DateTime
     */
    public $DebtOccuredOnTo;


    /**
     * Interest debt started date from
     *
     * @var \DateTime
     */
    public $DebtOccuredOnForSecondaryFrom;


    /**
     * Interest debt started date to
     *
     * @var \DateTime
     */
    public $DebtOccuredOnForSecondaryTo;


    /**
     * Defaulted date from
     *
     * @var \DateTime
     */
    public $DefaultedDateFrom;


    /**
     * Defaulted date to
     *
     * @var \DateTime
     */
    public $DefaultedDateTo;


    /**
     * Rescheduled date from
     *
     * @var \DateTime
     */
    public $RescheduledFrom;


    /**
     * Rescheduled date to
     *
     * @var \DateTime
     */
    public $RescheduledTo;


    /**
     * Last payment date from
     *
     * @var \DateTime
     */
    public $LastPaymentDateFrom;


    /**
     * Last payment date to
     *
     * @var \DateTime
     */
    public $LastPaymentDateTo;


    /**
     * Minimal DesiredDiscountRate
     *
     * @var float
     */
    public $DesiredDiscountRateMin;


    /**
     * Maximal DesiredDiscountRate
     *
     * @var float
     */
    public $DesiredDiscountRateMax;


    /**
     * Minimal Xirr
     *
     * @var float
     */
    public $XirrMin;


    /**
     * Maximal Xirr
     *
     * @var float
     */
    public $XirrMax;


    /**
     * Max items in result, default is 1000
     *
     * Minimum value: 1
     * Maximum value: 1000
     *
     * @var int
     */
    public $PageSize;


    /**
     * Result page nr
     *
     * Minimum value: 1
     * Maximum value: 2147483647
     *
     * @var int
     */
    public $PageNr;

}

