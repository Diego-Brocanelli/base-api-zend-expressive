<?php

namespace Api\Entity;

/**
 * @Entity @Table(name="chale")
 */
class Chales 
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;
 
    /**
     * @Column(type="text")
     */
    protected $nome;
    
    /**
     * @Column(type="integer")
     */
    protected $camasCasal;
    
    /**
     * @Column(type="integer")
     */
    protected $camasSolteiro;
    
    /**
     * @Column(type="text")
     */
    protected $descricao;
    
    function getId() 
    {
        return $this->id;
    }

    function getNome() 
    {
        return $this->nome;
    }

    function getCamasCasal() 
    {
        return $this->camasCasal;
    }

    function getCamasSolteiro() 
    {
        return $this->camasSolteiro;
    }

    function getDescricao() 
    {
        return $this->descricao;
    }

    function setId($id) 
    {
        $this->id = $id;
    }

    function setNome($nome) 
    {
        $this->nome = $nome;
    }

    function setCamasCasal($camasCasal) 
    {
        $this->camasCasal = $camasCasal;
    }

    function setCamasSolteiro($camasSolteiro) 
    {
        $this->camasSolteiro = $camasSolteiro;
    }

    function setDescricao($descricao) 
    {
        $this->descricao = $descricao;
    }
}
