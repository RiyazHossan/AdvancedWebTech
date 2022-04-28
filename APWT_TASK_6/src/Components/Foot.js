import React from "react";
class Foot extends React.Component {
    state = {
        curDT: new Date().toLocaleString(),
    }
    render() {
        return ( 
        <div className = "App-footer" >
            <hr/>
            <p> <b> Student Database || { this.state.curDT } </b></p >
            </div >
        );
    }
}

export default Foot;