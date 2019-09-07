import React, { Component } from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Modal from '@material-ui/core/Modal';
import Lightbox from 'react-image-lightbox';

export default class TextModal extends Component{
  constructor(props) {
    super(props);
    console.log('clicked')
    let toggleModalBox = (services) =>{
      this.setState(state =>({
        lightBoxIsOpen: !state.lightBoxIsOpen
      }));
    };

  this.serviceProvided = [...props.serviceProvided];
  this.state = {
    isOpen: true
  };

    
  const handleOpen = () => {
    setOpen(true);
  };

  const handleClose = () => {
    setOpen(false);
  };
}

  render(){
    const {services, isOpen} = this.state;
    return (
      <div>
        {isOpen ? (
          <Modal
          aria-labelledby="simple-modal-title"
          aria-describedby="simple-modal-description"
          open={open}
          onClose={handleClose}
        >
          <div style={modalStyle} className={classes.paper}>
            <h2 id="simple-modal-title">Text in a modal</h2>
            <p id="simple-modal-description">
              Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
            </p>
            <SimpleModal />
          </div>
        </Modal>
        ): this.setState({isOpen: false})}
      </div>
    );
  }
}