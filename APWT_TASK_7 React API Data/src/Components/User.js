import React from 'react';
import { Link } from 'react-router-dom';

const User = (props) => {
    const { name, user_id, dob, phone, email } = props.users;
    return ( 
        <center>
        <div className = "UserList" >
            <Link to = { "/userDetails" + "/" + name + "/" + user_id + "/" + dob + "/" + phone + "/" + email} > <b> Name: { name } </b></Link >
        </div>
        </center>
    );
};

export default User;