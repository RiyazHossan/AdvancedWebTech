import React from 'react';
import { useParams } from 'react-router-dom';

const UserDetails = (props) =>{
    const {name} = useParams();
    const {user_id} = useParams();
    const {dob} = useParams();
    const {phone} = useParams();
    const {email} = useParams();

    return(
       <center> <div className = 'UserDetails'>
            <h1><center>User Details</center></h1>
            <br/>
            <p>Name: {name}</p>
            <p>User Id: {user_id}</p>
            <p>Date of Birth: {dob}</p>
            <p>Phone: {phone}</p>
            <p>Email: {email}</p>
        </div>
        </center>
    );
};
export default UserDetails;