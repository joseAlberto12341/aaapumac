<?php 

namespace App\Models;

use App\Models\EntityModel;

class JobInfoModel extends EntityModel {
    protected $table = "jobinfo";
    protected $alias = "j";
    private ?int $id = null;
    private string $title = "";
    private string $description = "";
    private string $image = "";
    private ?int $vacancy = null;
    private string $responsabilities = "";
    private string $education = "";
    private string $experience = "";
    private string $additional = "";
    private string $workexperience = "";
    private string $salary = "";
    private string $contract_type = "";
    private string $benefits = "";
    private string $location = "";
    private ?int $id_status = null;
    private string $deadline = "";
    private string $created_at = "";
    private string $updated_at = "";
    private string $status = "";

    public function getId()//consultamos la informacion de la base de datos
    {
        return $this->id;
    }
    public function getTitle()//asignamos el valor o consultamos la informacion igual para editar 
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = ucwords($title);
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $image)
    {
        $this->image = $image;
    }
    public function getVacancy()
    {
        return $this->vacancy;
    }
    public function setVacancy(int $vacancy)
    {
        $this->vacancy = $vacancy;
    }
    public function getResponsabilities()
    {
        return $this->responsabilities;
    }
    public function setResponsabilities(string $responsabilities)
    {
        $this->responsabilities = $responsabilities;
    }
    public function getEducation()
    {
        return $this->education;
    }
    public function setEducation(string $education)
    {
        $this->education = $education;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience(string $experience)
    {
        $this->experience = $experience;
    }
    public function getAdditional()
    {
        return $this->additional;
    }
    public function setAdditional(string $additional)
    {
        $this->additional = $additional;
    }
    public function getWorkExperience()
    {
        return $this->workexperience;
    }
    public function setWorkExperience(string $workexperience)
    {
        $this->workexperience = $workexperience;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary(string $salary)
    {
        $this->salary = $salary;
    }
    public function getContractType()
    {
        return $this->contract_type;
    }
    public function setContractType(string $contract_type)
    {
        $this->contract_type = $contract_type;
    }
    public function getBenefits()
    {
        return $this->benefits;
    }
    public function setBenefits(string $benefits)
    {
        $this->benefits = $benefits;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setLocation(string $location)
    {
        $this->location = $location;
    }
    public function getId_Status()
    {
        return $this->id_status;
    }
    public function setId_Status(int $id_status)
    {
        $this->id_status = $id_status;
    }
    public function getDeadline()
    {
        return $this->deadline;
    }
    public function setDeadline(string $deadline)
    {
        $this->deadline = $deadline;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function setCreatedAt(string $created_at)
    {
        $this->created_at = $created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function setUpdatedAt(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
    public function insert()
    {
        $this->connect();
    
        $sql = "INSERT INTO " . $this->table . " (title, description, image, vacancy, responsabilities, education, experience, additional ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute([
            $this->getTitle(),
            $this->getDescription(),
            $this->getImage(),
            $this->getVacancy(),
            $this->getResponsabilities(),
            $this->getEducation(),
            $this->getExperience(),
            $this->getAdditional(),
        ]);
    }
}
