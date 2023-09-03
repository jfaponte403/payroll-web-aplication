<?php

function Healtandpension($salary)
{
    return $salary * 0.4;
}

function Solidarityfund($salary)
{
    if ($salary > 3124968) {
        return $salary * 0.1;
    }
    return 0;
}

function Feetodiscount($nfeetodiscount, $nfeepaid)
{
    return $nfeetodiscount - $nfeepaid;
}

function Dateendload($datedisbursement)
{
    return date('Y-m-d', strtotime($datedisbursement . ' +2 months'));
}

function Totaldeductions($healt, $pension, $solidarityfound, $quotavalue)
{
    return $healt + $pension + $solidarityfound + $quotavalue;
}

function Payrollpay($totalaccrued, $totaldeductions)
{
    return $totalaccrued - $totaldeductions;
}

function Feevalue($loan, $fee)
{
    return $loan / $fee;
}

function Loanbalance($loan, $paidloan)
{
    return $loan - $paidloan;
}

class deductions
{

    private $healt;
    private $pension;
    private $solidarityfound;
    private $mountdisbursement;
    private $nfeediscounts;
    private $datedisbursement;
    private $nfeepaid = 1;
    private $feetodiscount;
    private $payrollloan;
    private $feevalue;
    private $loanbalance;
    private $totaldeductions;
    private $totalpayroll;
    private $totalaccrued;

    function __construct($salary, $loan, $fee)
    {
        $this->healt = Healtandpension($salary);
        $this->pension = Healtandpension($salary);
        $this->solidarityfound = Solidarityfund($salary);
        $this->mountdisbursement = $this->mountdisbursement;
        $this->nfeediscounts = $this->nfeediscounts;
        $this->datedisbursement = $this->datedisbursement;
        $this->nfeepaid = $this->nfeepaid;
        $this->feetodiscount = Feetodiscount($this->nfeediscounts, $this->nfeepaid);
        $this->payrollloan = Dateendload($this->datedisbursement);
        $this->feevalue = Feevalue($loan, $fee);
        $this->loanbalance = Loanbalance($loan, $this->payrollloan);
        $this->totaldeductions = Totaldeductions($this->healt, $this->pension, $this->solidarityfound, $this->feevalue);
        $this->totalpayroll = Payrollpay($this->totalaccrued, $this->totaldeductions);
    }

    public function getHealt()
    {
        return $this->healt;
    }

    public function setHealt($healt)
    {
        $this->healt = $healt;
    }

    public function getPension()
    {
        return $this->pension;
    }

    public function setPension($pension)
    {
        $this->pension = $pension;
    }

    public function getSolidarityfound()
    {
        return $this->solidarityfound;
    }

    public function setSolidarityfound($solidarityfound)
    {
        $this->solidarityfound = $solidarityfound;
    }

    public function getMountdisbursement()
    {
        return $this->mountdisbursement;
    }

    public function setMountdisbursement($mountdisbursement)
    {
        $this->mountdisbursement = $mountdisbursement;
    }

    public function getNfeediscounts()
    {
        return $this->nfeediscounts;
    }

    public function setNfeediscounts($nfeediscounts)
    {
        $this->nfeediscounts = $nfeediscounts;
    }

    public function getDatedisbursement()
    {
        return $this->datedisbursement;
    }

    public function setDatedisbursement($datedisbursement)
    {
        $this->datedisbursement = $datedisbursement;
    }

    public function getNfeepaid()
    {
        return $this->nfeepaid;
    }

    public function setNfeepaid($nfeepaid)
    {
        $this->nfeepaid = $nfeepaid;
    }

    public function getFeetodiscount()
    {
        return $this->feetodiscount;
    }

    public function setFeetodiscount($feetodiscount)
    {
        $this->feetodiscount = $feetodiscount;
    }

    public function getPayrollloan()
    {
        return $this->payrollloan;
    }

    public function setPayrollloan($payrollloan)
    {
        $this->payrollloan = $payrollloan;
    }

    public function getFeevalue()
    {
        return $this->feevalue;
    }

    public function setFeevalue($feevalue)
    {
        $this->feevalue = $feevalue;
    }

    public function getLoanbalance()
    {
        return $this->loanbalance;
    }

    public function setLoanbalance($loanbalance)
    {
        $this->loanbalance = $loanbalance;
    }

    public function getTotaldeductions()
    {
        return $this->totaldeductions;
    }

    public function setTotaldeductions($totaldeductions)
    {
        $this->totaldeductions = $totaldeductions;
    }

    public function getTotalpayroll()
    {
        return $this->totalpayroll;
    }

    public function setTotalpayroll($totalpayroll)
    {
        $this->totalpayroll = $totalpayroll;
    }

    public function getTotalaccrued()
    {
        return $this->totalaccrued;
    }

    public function setTotalaccrued($totalaccrued)
    {
        $this->totalaccrued = $totalaccrued;
    }
};
