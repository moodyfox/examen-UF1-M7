<?php

namespace AppBundle\Service;


class WordService
{
    private $op1;
    private $op2;
    private $result;

    private function __contruct()
    {
        $this->result = "0";
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    public function concatAction()
    {
        $this->result = $this->op1 . $this->op2;
    }

    public function countAction()
    {
        $this->result = strlen($this->op1);
    }

    public function upperAction()
    {
        $this->result = strtoupper($this->op1);
    }

    public function lowerAction()
    {
        $this->result = strtolower($this->op1);
    }

    public function localizaAction()
    {
        $pos = strpos($this->op1, $this->op2);
        if ($pos == false){
            $this->result = "No se ha encontrado el caracter '$this->op2' en '$this->op1'";
        }
        else {
            $this->result = "El caracter '$this->op2' se encuentra en la posicion $pos de la cadena '$this->op1'";
        }

    }

    public function toarrayAction()
    {
        $this->result = explode(" ", $this->op1);
    }
}