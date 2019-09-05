import React, { Component } from 'react';
import Lightbox from 'react-image-lightbox';
import 'react-image-lightbox/style.css'; // This only needs to be imported once in your app
 
 
export default class LightboxDisplay extends Component {
  constructor(props) {
    super(props);
    let toggleLightBox = (photoIndex) =>{
      this.setState(state =>({
        lightboxIsOpen: !state.lightboxIsOpen,
        photoIndex,
      }));      
    };

    this.images = [...props.images];
    this.state = {
      photoIndex: 0,
      isOpen: true,
    };
  }
 
  render() {
    const { photoIndex, isOpen } = this.state;
 
    return (
      <div>
      
 
        {isOpen ? (
          <Lightbox
            mainSrc={this.images[photoIndex].src}
            nextSrc={this.images[(photoIndex + 1) % this.images.length]}
            prevSrc={this.images[(photoIndex + this.images.length - 1) % this.images.length]}
            onCloseRequest={() => this.setState({ isOpen: false })}
            onMovePrevRequest={() =>
              this.setState({
                photoIndex: (photoIndex + this.images.length - 1) % this.images.length,
              })
            }
            onMoveNextRequest={() =>
              this.setState({
                photoIndex: (photoIndex + 1) % this.images.length,
              })
            }
          />
        ): this.setState({ isOpen: false })}
      </div>
    );
  }
}