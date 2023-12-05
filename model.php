<?php
$dbHost = '127.0.0.1';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'practice';


$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected";
    "<br>";
}

class Teacher
{
    public function getAllTeachers()
    {
        global $conn;
        $result = $conn->query("SELECT * FROM teacher");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTeacherById($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $result = $conn->query("SELECT * FROM teacher WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function addTeacher($name, $subject)
    {
        global $conn;
        $name = $conn->real_escape_string($name);
        $subject = $conn->real_escape_string($subject);
        $conn->query("INSERT INTO teacher (name, subject) VALUES ('$name', '$subject')");
        return $conn->insert_id;
    }

    public function updateTeacher($id, $name, $subject)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $name = $conn->real_escape_string($name);
        $subject = $conn->real_escape_string($subject);
        $conn->query("UPDATE teacher SET teacher_name = '$name', subject = '$subject' WHERE id = $id");
    }

    public function deleteTeacher($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $conn->query("DELETE FROM teacher WHERE teacher_id = $id");
    }
}


// Course Model

class Course
{
    public function getAllCourses()
    {
        global $conn;
        $result = $conn->query("SELECT * FROM course");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCourseById($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $result = $conn->query("SELECT * FROM course WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function addCourse($name)
    {
        global $conn;
       
        $name = $conn->real_escape_string($name);
        $conn->query("INSERT INTO course (name) VALUES ('$name')");
        return $conn->insert_id;
    }

    public function updateCourse($id, $name, $subject)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $name = $conn->real_escape_string($name);
        $subject = $conn->real_escape_string($subject);
        $conn->query("UPDATE course SET name = '$name', subject = '$subject' WHERE id = $id");
    }

    public function deleteCourse($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $conn->query("DELETE FROM course WHERE course_id = $id");
    }
}


// Student Model


class Student
{
    public function getAllStudents()
    {
        global $conn;
        $result = $conn->query("SELECT * FROM student");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getStudentById($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $result = $conn->query("SELECT * FROM student WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function addStudent($name , $course)
    {
        global $conn;
       
        $name = $conn->real_escape_string($name);
        $course = $conn->real_escape_string($course);
        $conn->query("INSERT INTO student( name , course) VALUES ('$name', '$course')");
        return $conn->insert_id;
    }

    public function updateStudent($id, $name, $subject)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $name = $conn->real_escape_string($name);
        $subject = $conn->real_escape_string($subject);
        $conn->query("UPDATE student SET name = '$name', subject = '$subject' WHERE id = $id");
    }

    public function deleteStudent($id)
    {
        global $conn;
        $id = $conn->real_escape_string($id);
        $conn->query("DELETE FROM student WHERE course_id = $id");
    }
}




?>