<?php
    $studentsCount = rand(1, 1000000);
    $studentsDuoLastNum = substr($studentsCount, -2, 2);
    $studentsLastNum = substr($studentsCount, -1, 1);

    switch (true) {
        case $studentsDuoLastNum >= 10 && $studentsDuoLastNum < 21: echo "на учебе $studentsCount студентов";
            break;
        case $studentsLastNum > 1 && $studentsLastNum < 5: echo "на учебе $studentsCount студента";
            break;
        case $studentsLastNum > 4 && $studentsLastNum < 10: echo "на учебе $studentsCount студентов";
            break;
        case $studentsLastNum > 0 && $studentsLastNum < 2: echo "на учебе $studentsCount студент";
            break;
        default: echo "на учебе $studentsCount студентов";
            break;
    }

