<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="endereco")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="quadra", type="string", length=255)
     */
    private $quadra;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255)
     */
    private $obs;

    /**
     * @ORM\ManyToOne(targetEntity="Contatos")
     * @ORM\JoinColumn(name="contato_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $contato;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quadra
     *
     * @param string $quadra
     *
     * @return Endereco
     */
    public function setQuadra($quadra)
    {
        $this->quadra = $quadra;

        return $this;
    }

    /**
     * Get quadra
     *
     * @return string
     */
    public function getQuadra()
    {
        return $this->quadra;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Endereco
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return Endereco
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set contato
     *
     * @param \AppBundle\Entity\Contatos $contato
     *
     * @return Endereco
     */
    public function setContato(\AppBundle\Entity\Contatos $contato = null)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Get contato
     *
     * @return \AppBundle\Entity\Contatos
     */
    public function getContato()
    {
        return $this->contato;
    }
}
