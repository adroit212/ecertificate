<?php

class MySessions {

    //database connection method
    public function getConnection() {
        try {
            $con = new PDO("mysql:host=localhost;dbname=ecertificate", "root", "");
            return $con;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function registerLogin($login_id, $password, $role) {
        try {
            $query = "INSERT INTO login(login_id,password,role) VALUES(?,?,?)";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $login_id);
            $stmt->bindParam(2, $password);
            $stmt->bindParam(3, $role);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteLogin($login_id) {
        try {
            $query = "DELETE FROM login WHERE login_id=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $login_id);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getLoginByUsernamePassword($username, $password) {
        try {
            $query = "SELECT * FROM login WHERE login_id=? AND password=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $stmt->execute();
            $res = $stmt->fetchAll();
            $result = NULL;
            foreach ($res as $r) {
                $result = $r;
            }

            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function generateCenterNumbers($size) {
        try {
            $numbers_bag = "121342563784915234656778899";
            $numbers = substr(str_shuffle($numbers_bag), 0, $size);

            //Confirm center number doesnt exist
            $query = "SELECT * FROM login WHERE login_id=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $numbers);
            $stmt->execute();
            $res = count($stmt->fetchAll());

            if ($res > 0) {
                $this->generateCenterNumbers($size);
            } else {
                return $numbers;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function generateCertificateNumbers($size) {
        try {
            $numbers_bag = "121342563784915234656778899";
            $numbers = substr(str_shuffle($numbers_bag), 0, $size);

            //Confirm center number doesnt exist
            $query = "SELECT * FROM certificate WHERE certificate_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $numbers);
            $stmt->execute();
            $res = count($stmt->fetchAll());

            if ($res > 0) {
                $this->generateCertificateNumbers($size);
            } else {
                return $numbers;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function registerInstitution($center_number, $name, $phone, $email, $address) {
        try {
            $reg_date = date("Y-m-d");

            $this->registerLogin($center_number, $center_number, "institution");

            $query = "INSERT INTO institution(center_number,institution_name,phone,email,address,reg_date) VALUES(?,?,?,?,?,?)";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $center_number);
            $stmt->bindParam(2, $name);
            $stmt->bindParam(3, $phone);
            $stmt->bindParam(4, $email);
            $stmt->bindParam(5, $address);
            $stmt->bindParam(6, $reg_date);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteInstitution($center_number) {
        try {
            $query = "DELETE FROM institution WHERE center_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $center_number);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getSingleInstitutionByNumber($center_number) {
        try {
            $query = "SELECT * FROM institution WHERE center_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $center_number);
            $stmt->execute();
            $result = NULL;
            $res = $stmt->fetchAll();

            foreach ($res as $r) {
                $result = $r;
            }

            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function getAllInstitution() {
        try {
            $query = "SELECT * FROM institution";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function registerCertificate($certificate_number, $center_number, $student_fullname, $file_url) {
        try {
            //$certificate_number = $this->generateCertificateNumbers(6);
            $reg_date = date("Y-m-d");
            $query = "INSERT INTO certificate(certificate_number,center_number,student_fullname,file_url,reg_date) VALUES(?,?,?,?,?)";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $certificate_number);
            $stmt->bindParam(2, $center_number);
            $stmt->bindParam(3, $student_fullname);
            $stmt->bindParam(4, $file_url);
            $stmt->bindParam(5, $reg_date);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function deleteCertificate($certificate_number, $file_url) {
        try {
            $query = "DELETE FROM certificate WHERE certificate_number=?";
            unlink("../certificates/" . $file_url);
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $certificate_number);
            $stmt->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    //get single certificate by certificate number
    public function getSingleCertificateByNumber($certificate_number) {
        try {
            $query = "SELECT * FROM certificate WHERE certificate_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $certificate_number);
            $stmt->execute();
            $result = NULL;
            $res = $stmt->fetchAll();

            foreach ($res as $r) {
                $result = $r;
            }

            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    //get certificate by center number
    public function getCertificateByCenter($center_number) {
        try {
            $query = "SELECT * FROM certificate WHERE center_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $center_number);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    //get single certificate by center number and certificate number
    public function getSingleCertificateByNumberCenter($certificate_number, $center_number) {
        try {
            $query = "SELECT * FROM certificate WHERE certificate_number=? AND center_number=?";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->bindParam(1, $certificate_number);
            $stmt->bindParam(2, $center_number);
            $stmt->execute();
            $result = NULL;
            $res = $stmt->fetchAll();

            foreach ($res as $r) {
                $result = $r;
            }

            return $result;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

    public function getAllCertificate() {
        try {
            $query = "SELECT * FROM certificate";
            $stmt = $this->getConnection()->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return NULL;
    }

}
