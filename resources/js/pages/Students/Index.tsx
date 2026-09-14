import StudentCard from "../../components/Students/StudentCard";
export default function Index({students}){
    return (
        <div>
            {
                students.map(student => (
                    <StudentCard
                        key = {student.id}
                        first_name= {student.first_name}
                        last_name= {student.last_name}
                        student_number= {student.massar_number}
                    />
                ))
            }
        </div>
    );
}
