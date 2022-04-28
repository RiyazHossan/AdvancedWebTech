import React, { useState } from 'react';
import StudentDb from './StudentDb';

function StudentList(props) {
    const data = [{ name: 'Riyaz', id: '19-41432-3', cgpa: '3.93' }, { name: 'Rahul', id: '19-41400-3', cgpa: '4' }, { name: 'Sakib', id: '19-41439-3', cgpa: '3.8' }]
    const [studentdb] = useState(data)
    return (
         < div > {
                studentdb.map(student => < StudentDb students = { student }
                    />)} 
                     </div >
                )
            }

            export default StudentList;