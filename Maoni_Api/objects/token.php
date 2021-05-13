<?php
class Token
{
    private $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function is_table_empty()
    {
        $stmt = $this->conn->prepare("SELECT id FROM token");
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count > 0) {
            return false;
        }
        return true;
    }

    public function get_access_token()
    {
        $stmt = $this->conn->prepare("SELECT access_token FROM token");
        $stmt->execute();
        return $stmt;
    }

    public function get_refersh_token()
    {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }

    public function update_access_token($token)
    {
        if ($this->is_table_empty()) {
            echo "Access token inserted successfully.";
            $this->conn->query("INSERT INTO token(access_token) VALUES('$token')");
        } else {
            echo "Error: Access token already inserted";
            $this->conn->query("UPDATE token SET access_token = '$token' WHERE id = (SELECT id FROM token)");
        }
    }
}
