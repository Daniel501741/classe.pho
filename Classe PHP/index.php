<?php
    /**
     * <b>Documentação</b>
     * @author Daniel ScheffeL
     */

    class Pessoa{

        /** 
         * @param string $nome Nome da pessoa.
         * @param string $dataNascimento Data de nascimento da pessoa.
         * @param int $CPF CPF da pessoa.
         * @param int $RG RG da pessoa.
         */

        public $nome;
        public $dataNascimento;
        public $CPF; 
        public $RG; 

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setCPF($CPF){
            $this->CPF = $CPF;
        }
        public function getCPF(){
            return $this->CPF;
        }

        public function setRG($RG){
            $this->RG = $RG;
        }
        public function getRG(){
            return $this->RG;
        }
    }


    $pessoa = new Pessoa();
    $pessoa->setNome("Cleiton");
    $pessoa->setDataNascimento("07/10/2000");
    $pessoa->setCPF("098.765.432-11");
    $pessoa->setRG("987654321");


    class Engenheiro extends Pessoa{

        /**
         * @param int $CREA CREA do engenheiro.
         */

        public $CREA;

        public function setCrea($CREA){
            $this->CREA = $CREA;
        }
        public function getCrea(){
            return $this->CREA;
        }
    }

    $engenheiro = new Engenheiro();
    $engenheiro->setNome("Fábio");
    $engenheiro->setDataNascimento("20/01/1990");
    $engenheiro->setCPF("721.938.901-23");
    $engenheiro->setRG("739176378");
    $engenheiro->setCrea("Engenheiro eléctrico");


    class Medico extends Pessoa{

        /** 
         * @param int $CRM CRM do médico.
         */
        
        public $CRM;

        public function setCrm($CRM){
            $this->CRM = $CRM;
        }
        public function getCrm(){
            return $this->CRM;
        }
    }


    $medico = new Medico();
    $medico->setNome("Julia");
    $medico->setDataNascimento("27/06/1989");
    $medico->setCPF("938.281.037-78");
    $medico->setRG("829108493");
    $medico->setCrm("739164910");

    echo "<b>Pessoa</b>";
    echo "<br>";
    echo "Nome: " . $pessoa->getNome();
    echo "<br>";
    echo "Data de nascimento: " . $pessoa->getDataNascimento();
    echo "<br>";
    echo "CPF: " . $pessoa->getCPF();
    echo "<br>";
    echo "RG: " . $pessoa->getRG();
    echo "<br>";
    echo "<br>";
    echo "<b>Engenheiro</b>";
    echo "<br>";
    echo "Nome: " . $engenheiro->getNome();
    echo "<br>";
    echo "Data de nascimento: " . $engenheiro->getDataNascimento();
    echo "<br>";
    echo "CPF: " . $engenheiro->getCPF();
    echo "<br>";
    echo "RG: " . $engenheiro->getRG();
    echo "<br>";
    echo "CREA: " . $engenheiro->getCrea();
    echo "<br>";
    echo "<br>";
    echo "<b>Médico</b>";
    echo "<br>";
    echo "Nome: " . $medico->getNome();
    echo "<br>";
    echo "Data de nascimento: " . $medico->getDataNascimento();
    echo "<br>";
    echo "CPF: " . $medico->getCPF();
    echo "<br>";
    echo "RG: " . $medico->getRG();
    echo "<br>";
    echo "CRM: " . $medico->getCrm();
    echo "<br>";
?>