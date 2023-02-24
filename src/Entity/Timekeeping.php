<?php

namespace App\Entity;

use App\Repository\TimekeepingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimekeepingRepository::class)
 */
class Timekeeping
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ID;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Staff_ID;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Salary_ID;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $Number_of_working_day;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(int $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getStaffID(): ?string
    {
        return $this->Staff_ID;
    }

    public function setStaffID(string $Staff_ID): self
    {
        $this->Staff_ID = $Staff_ID;

        return $this;
    }

    public function getSalaryID(): ?string
    {
        return $this->Salary_ID;
    }

    public function setSalaryID(string $Salary_ID): self
    {
        $this->Salary_ID = $Salary_ID;

        return $this;
    }

    public function getNumberOfWorkingDay(): ?string
    {
        return $this->Number_of_working_day;
    }

    public function setNumberOfWorkingDay(string $Number_of_working_day): self
    {
        $this->Number_of_working_day = $Number_of_working_day;

        return $this;
    }
}
