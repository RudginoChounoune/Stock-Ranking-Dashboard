<?php

class Stock
{
    private $rank;
    private $symbol;
    private $companyName;
    private $quant;
    private $saAuthors;
    private $wallStreet;
    private $marketCap;
    private $marketCapInBillion;

    public function __construct($rank, $symbol, $companyName, $quant, $saAuthors, $wallStreet, $marketCap, $marketCapInBillion)
    {
        $this->rank = $rank;
        $this->symbol = $symbol;
        $this->companyName = $companyName;
        $this->quant = $quant;
        $this->saAuthors = $saAuthors;
        $this->wallStreet = $wallStreet;
        $this->marketCap = $marketCap;
        $this->marketCapInBillion = $marketCapInBillion;

    }

    function get_rank()
    {
        return $this->rank;
    }
    function get_symbol()
    {
        return $this->symbol;
    }
    function get_companyName()
    {
        return $this->companyName;
    }

    function get_quant()
    {
        return $this->quant;
    }

    function get_saAuthors()
    {
        return $this->saAuthors;
    }

    function get_wallStreet()
    {
        return $this->wallStreet;
    }
    function get_marketCap()
    {
        return $this->marketCap;
    }
    function get_marketCapInBillion()
    {
        return $this->marketCapInBillion;
    }

}
?>