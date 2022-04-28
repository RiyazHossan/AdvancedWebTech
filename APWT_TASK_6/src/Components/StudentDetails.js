import React from 'react';
import { useParams } from 'react-router-dom';

const StudentDetails = (props) => {
    const { name } = useParams();
    const { id } = useParams();
    const { cgpa } = useParams();
    return ( 
        <div className = 'StudentDetails' >
        <
        h1 > Full Student Details </h1><br/ >
        <p> Name: { name } </p> 
        <p> ID: { id } </p> 
        <p> CGPA: { cgpa } </p>

        </div>
    );
};

export default StudentDetails;