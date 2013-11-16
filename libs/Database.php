<?php
/**
 * KabantayNgBayan: OpenData
 *
 * @category  Hackaton
 * @package   KabantayNgBayan
 * @author    Jesus B. Nana <jesus.nana@adtouch.com>
 * @copyright 2013 KabantayNgBayan
 * @license   [url] [description]
 * @version   0.1
 * @link      http://technousers.com
 */
//namespace KabantayNgBayan\Database;

/**
 * S3 Uploader
 *
 * @category Government
 * @package  KabantayNgBayan
 * @author   Jesus B. Nana <jesus.nana@gmail.com>
 * @license  [url] [description]
 * @version  0.1
 * @link     http://technousers.com
 */
class Database
{

    private $_username;
    private $_password;
    private $_host;
    private $_dbname;
    private $_mysqli;

    /**
     * [__construct description]
     *
     * @param string  $username DB Username
     * @param string  $password DB Password
     * @param string  $host     DB Hostname or IP Address
     * @param integer $dbname   DB Name
     */
    public function __construct($host, $username, $password, $dbname)
    {
        $this->_host     = $host;
        $this->_username = $username;
        $this->_password = $password;
        $this->_dbname   = $dbname;

        $this->connect();
    }

    public function connect()
    {
        try {
            $this->_mysqli = new \mysqli($this->_host, $this->_username,
                $this->_password, $this->_dbname);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function insertDepartment($data)
    {
        $query = "INSERT INTO departments (name, budget) VALUES ('" .
            $data['name'] . "', " . $data['budget'] . ")";

        return $this->_mysqli->query($query);
    }

    public function updateDepartment($data)
    {
        $query = "UPDATE departments set name = '" . $data['name'] . "',
            budget = '" . $data['budget'] . "' WHERE id = '" .
            $data['id'] . "'";

        return $this->_mysqli->query($query);
    }

    public function getDepartment($id)
    {
        $query = "SELECT id, name, budget from departments WHERE id = '" . $id
            . "'";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_assoc();
    }

    public function getAllDepartments()
    {
        $query = "SELECT id, name, budget from departments";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertUserDeptBudget($data)
    {
        $query = "INSERT INTO user_dept_budgets (fb_id, email, full_name,
            department_id, budget, name, notes, group_id) VALUES
            ('".$data['fb_id']."', '".$data['email']."', '".
                $data['full_name']."', '".$data['department_id']."', '".
                $data['budget']."', '".$data['name']."', '".$data['notes'].
                "', '" . "', '".$data['group_id']."')";

        return $this->_mysqli->query($query);
    }

    public function updateUserDeptBudget($data)
    {
        $query = "UPDATE user_dept_budgets set fb_id = '" . $data['fb_id'] . "',
            email = '" . $data['email'] . "',
            full_name = '" . $data['full_name'] . "',
            department_id = '" . $data['department_id'] . "',
            budget = '" . $data['budget'] . "',
            name = '" . $data['name'] . "',
            notes = '" . $data['notes'] .
            "', group_id = '" . $data['group_id'] . "'
            " . "' WHERE id = '" .
            $data['id'] . "'";

        return $this->_mysqli->query($query);
    }

    public function getUserDeptBudget($id)
    {
        $query = "SELECT * from user_dept_budgets WHERE id = '" . $id . "'";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_assoc();
    }

    public function getAllUserDeptBudgets()
    {
        $query = "SELECT * from user_dept_budgets";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertComment($data)
    {
        $query = "INSERT INTO comments (fb_id, email, full_name, comments,
            status, type) VALUES ('" .
            $data['fb_id'] . "', '" .
            $data['email'] . "', '" .
            $data['full_name'] . "', '" .
            $data['comments'] . "', '" .
            $data['status'] . "', '" .
            $data['type'] .
            "')";

        return $this->_mysqli->query($query);
    }

    public function updateComment($data)
    {
        $query = "UPDATE comments set
            fb_id = '" . $data['fb_id'] . "',
            email = '" . $data['email'] . "',
            full_name = '" . $data['full_name'] . "',
            comments = '" . $data['comments'] . "',
            status = '" . $data['status'] . "',
            type = '" . $data['type'] . "'
            " . " WHERE id = '" .
            $data['id'] . "'";

        return $this->_mysqli->query($query);
    }

    public function getComment($id)
    {
        $query = "SELECT * from comments";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_assoc();
    }

    public function getAllComments()
    {
        $query = "SELECT * from user_dept_budgets";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertRating($data)
    {
        $query = "INSERT INTO ratings (fb_id, saro_id, email, full_name, stars)
            VALUES ('".
            $data['fb_id'] . "', '" .
            $data['saro_id'] . "', '" .
            $data['email'] . "', '" .
            $data['full_name'] . "', '" .
            $data['stars'] .
            "')";

        return $this->_mysqli->query($query);
    }

    public function updateRating($data)
    {
        $query = "UPDATE ratings set
            fb_id = '" . $data['fb_id'] . "',
            saro_id = '" . $data['saro_id'] . "',
            email = '" . $data['email'] . "',
            full_name = '" . $data['full_name'] . "',
            stars = '" . $data['stars'] . "'
            " . " WHERE id = '" .
            $data['id'] . "'";

        return $this->_mysqli->query($query);
    }

    public function getRating($id)
    {
        $query = "SELECT * from ratings";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_assoc();
    }

    public function getAllRatings()
    {
        $query = "SELECT * from ratings";

        $result = $this->_mysqli->query($query, MYSQLI_USE_RESULT);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}