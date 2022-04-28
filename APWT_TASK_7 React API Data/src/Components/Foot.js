import React from "react";
class Foot extends React.Component {
    state = {
        curDT: new Date().toLocaleString(),
    }
    render() {
        return ( 
        <div className = "App-footer" >
            <hr/>
            <p> <b> User Database (Lab Task 7) || { this.state.curDT } </b></p >
            </div >
        );
    }
}

export default Foot;