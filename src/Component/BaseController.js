import React, { Component } from 'react';

export default class BaseController extends Component {
  constructor(props) {
    super(props);

    this.state = {};
  }

  copyState = (state) => JSON.parse(JSON.stringify(state));

  render() {
    const BaseComponent = this.props.component.type;
    const { component, bladeProps } = this.props;

    return (
      <>
        <BaseComponent {...component.props} bladeProps={bladeProps} copyState={this.copyState}/>
      </>
    );
  }
};
