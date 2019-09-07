import React, { Component } from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Modal from 'react-bootstrap/Modal';


class Showcase extends Component{
    constructor(props){
        super(props);

        this.showModal = () => {
          this.setState({show: true});
        };


        this.state = {name: props.name};
    }
    render(){
    return (
        <SimpleModal show={this.showModal}/>
    );
    }
}

function SimpleModal(props) {
  
    return (
      <h1>foo</h1>
  );
  }



export default Showcase;