<?php
    function Healtandpension($n1){
        return $n1*0.4;
    }

    function Solidarityfund($n1){
        if($n1>3124968){
            return $n1*0.1;
        } return 0;
    }

    function Feediscount($n1, $n2){
        return $n1-$n2;
    }

    function Totaldeductions($n1,$n2,$n3,$n4,$n5,$n6){
        return $n1+$n2+$n2+$n3+$n4+$n5;
    }

    function Payrollpay($n1,$n2){
        return $n1-$n2;
    }

    function Mountdisbursement(){};

    function Nfeediscount(){};

    function Datedisbursement(){};

    function Nfeepaid(){};

    function Feevalue(){};

    function Loanbalance(){};

    function Payrollloan(){};

    class deductions{

        private $healt;
        private $pension;
        private $solidarityfound;
        private $mountdisbursement;
        private $nfeediscounts;
        private $datedisbursement;
        private $nfeepaid;
        private $feetodiscount;
        private $payrollloan;
        private $feevalue;
        private $loanbalance;
        private $totaldeductions;
        private $totalpayroll;

        function __construct($n1, $n2, $n3, $n4, $n5, $n6){
            $this->healt = Healtandpension($n1);
            $this->pension = Healtandpension($n1);
            $this->solidarityfound = Solidarityfund($n1);
            $this->mountdisbursement = Mountdisbursement();
            $this->nfeediscounts = Nfeediscount();
            $this->datedisbursement = Datedisbursement();
            $this->nfeepaid = Nfeepaid();
            $this->feetodiscount = Feediscount($n1,$n2);
            $this->payrollloan = Payrollloan();
            $this->feevalue = Feevalue();
            $this->loanbalance = Loanbalance();
            $this->totaldeductions = Totaldeductions($n1, $n2, $n3, $n4, $n5, $n6);
            $this->totalpayroll= Payrollpay($n1,$n2);
        }

        public function getHealt(){
            return $this->healt;
        }
    
        public function setHealt($healt){
            $this->healt = $healt;
        }
    
        public function getPension(){
            return $this->pension;
        }
    
        public function setPension($pension){
            $this->pension = $pension;
        }
    
        public function getSolidarityfound(){
            return $this->solidarityfound;
        }
    
        public function setSolidarityfound($solidarityfound){
            $this->solidarityfound = $solidarityfound;
        }
    
        public function getMountdisbursement(){
            return $this->mountdisbursement;
        }
    
        public function setMountdisbursement($mountdisbursement){
            $this->mountdisbursement = $mountdisbursement;
        }
    
        public function getNfeediscounts(){
            return $this->nfeediscounts;
        }
    
        public function setNfeediscounts($nfeediscounts){
            $this->nfeediscounts = $nfeediscounts;
        }
    
        public function getDatedisbursement(){
            return $this->datedisbursement;
        }
    
        public function setDatedisbursement($datedisbursement){
            $this->datedisbursement = $datedisbursement;
        }
    
        public function getNfeepaid(){
            return $this->nfeepaid;
        }
    
        public function setNfeepaid($nfeepaid){
            $this->nfeepaid = $nfeepaid;
        }
    
        public function getFeetodiscount(){
            return $this->feetodiscount;
        }
    
        public function setFeetodiscount($feetodiscount){
            $this->feetodiscount = $feetodiscount;
        }
    
        public function getPayrollloan(){
            return $this->payrollloan;
        }
    
        public function setPayrollloan($payrollloan){
            $this->payrollloan = $payrollloan;
        }
    
        public function getFeevalue(){
            return $this->feevalue;
        }
    
        public function setFeevalue($feevalue){
            $this->feevalue = $feevalue;
        }
    
        public function getLoanbalance(){
            return $this->loanbalance;
        }
    
        public function setLoanbalance($loanbalance){
            $this->loanbalance = $loanbalance;
        }
    
        public function getTotaldeductions(){
            return $this->totaldeductions;
        }
    
        public function setTotaldeductions($totaldeductions){
            $this->totaldeductions = $totaldeductions;
        }
    
        public function getTotalpayroll(){
            return $this->totalpayroll;
        }
    
        public function setTotalpayroll($totalpayroll){
            $this->totalpayroll = $totalpayroll;
        }
    };

    
    

?>