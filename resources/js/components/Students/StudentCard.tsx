import {useState} from "react";

export default function StudentCard({first_name,last_name,student_number}){
    let name = first_name + " " + last_name;
    const [showStudentNumber,setShowStudentNumber] = useState(false);
    return (
        <div className="p-1 rounded bg-yellow-500 text-fuchsia-950 m-2 w-72">
            <h2>Full Name: {name}</h2>
            <p>Student Number: {showStudentNumber?"___":student_number}</p>
            <button
                className="border text-white py-1.5 px-2 cursor-pointer bg-amber-700"
                onClick={
                    () => setShowStudentNumber(!showStudentNumber)
                }
            >{showStudentNumber
                ? "Show Student Number"
                : "Hide Student Number"
            }</button>
        </div>
    );
}
