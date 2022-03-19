<?php

class database
{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "se_db_kelas";
    var $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
    }

    function getAllStudent()
    {
        $data = mysqli_query(
            $this->conn,
            "select student.*, class.name as class_name from student
			join class on class.id_class = student.class_id
			"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
    function getAllClass()
    {
        $data = mysqli_query(
            $this->conn,
            "select * FROM class"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function getSelectedStudent($id)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn,
            "SELECT student.*, class.name as class_name from student 
            join class on class.id_class = student.class_id WHERE student.id_student = '$id'"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
    function getSelectedClass($id)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn, "SELECT * FROM class WHERE id_class='$id'"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function storeStudent($name, $nisn, $gender, $class_id)
    {
        $data = mysqli_query(
            $this->conn,"insert into student(name,nisn,gender,class_id) 
            values('$name', '$nisn', '$gender', '$class_id')"
        );

        return $data;
    }
    function storeClass($name,$year)
    {
        $data = mysqli_query(
            $this->conn,"insert into class(name, year) 
            values('$name','$year')"
        );
        return $data;
    }

    function updateStudent($id, $name, $nisn, $gender, $class_id)
    {
        $data = mysqli_query(
            $this->conn,"update student set name='$name', nisn='$nisn', gender='$gender', class_id='$class_id' WHERE id_student='$id'"
        );

        return $data;
    }
    function updateClass($id, $class_name,$year)
    {
        $data = mysqli_query(
            $this->conn,
            "update class set name='$class_name', year='$year' WHERE id_class='$id'"
        );

        return $data;
    }

    function deleteStudent($id)
    {
        $data = mysqli_query($this->conn, "DELETE FROM student WHERE id_student='$id'");

        return $data;
    }
    function deleteClass($id)
    {
        $data = mysqli_query($this->conn, "DELETE FROM class WHERE id_class='$id'");

        return $data;
    }
    function getStudentWithClass($id)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn,
            "select * FROM student where class_id='$id'"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
}

?>