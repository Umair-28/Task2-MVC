
<?php

require_once './model.php';

$teacherModel = new Teacher();
$courseModel = new Course();
$studentModel = new Student();
// $courseModel = new Course();
// $classModel = new ClassModel();



// $newTeacherId = $teacherModel->addTeacher('John Doe', 'Physics');


// Delete a course
// $teacherModel->deleteTeacher(3);

// Example: Update a teacher
// $teacherModel->updateTeacher($newTeacherId, 'John Updated', 'Math Updated');

// Get all teachers
$teachers = $teacherModel->getAllTeachers();

// Display
echo 'Teachers Data';
echo "\n\n";
echo "[ID]  [Name] [Subject] " . "\n";
foreach ($teachers as $teacher) {
    echo " " .  $teacher['teacher_id'] .  '  -  ' .    $teacher['name'] .  ' - ' . $teacher['subject'];
    echo "\n";
}

// Course Controller

// Add a course
// $courseModel->addCourse('Mathematics');


// Delete a course
$courseModel->deleteCourse(3);

// Example: Update a teacher
// $teacherModel->updateTeacher($newTeacherId, 'John Updated', 'Math Updated');

// Get all teachers
$courses = $courseModel->getAllCourses();

// Display
echo 'Courses Data';
echo "\n\n";
echo "[ID]  [Name] ". "\n";
foreach ($courses as $course) {
    echo " " .  $course['course_id'] .  '  -  ' .    $course['name'] ;
    echo "\n";
}

// Student Controller

// Add a student
// $studentModel->addStudent('BOB' , 'WEB');




// Delete a student
// $studentModel->deleteStudent(3);

// Example: Update a student
// $studentModel->updateStudent($newTeacherId, 'John Updated', 'Math Updated');

// Get all student
$students = $studentModel->getAllStudents();

// Display
echo 'Students Data';
echo "\n\n";
echo "[ID]  [Name] ". "\n";
foreach ($students as $student) {
    echo " " .  $student['student_id'] .  '  -  ' .    $student['name'] . '  -  ' .    $student['course'] ;
    echo "\n";
}



