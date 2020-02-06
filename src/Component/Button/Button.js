import React, { Component } from 'react';

export default class Button extends Component {
  constructor(props) {
    super(props);

    if (props.bladeProps) {
      this.state = {
        slug: props.customProps.slug,
        ...props.bladeProps,
        ...props.customProps.default
      };
    } else {
      this.state = {
        slug: props.customProps.slug,
        ...props.customProps.default
      };
    }
  }

  // componentDidMount() {
  //   this.init();
  // }

  // init = () => {
  //   const { toggle, ripple, reversePositions } = this.state;

  //   const classNames = [];

  //   const sizeClass = this.setSize();
  //   classNames.push(this.prependBaseClass(sizeClass));

  //   if (ripple) classNames.push('ripple', 'ripple--before');
  //   if (toggle) { 
  //     classNames.push(this.prependBaseClass('__toggle'));
  //     this.setToggleAttributes();
  //   }
  //   if (reversePositions) {
  //     this.setState({
  //       labelMod: '--reverse'
  //     });
  //   }

  //   this.setState({
  //     classList: {...classNames.flat(Infinity)}
  //   })
  // }

  // setToggleAttributes = () =>
  // {
  //   const toggleId = uniqid();
  //   const data = this.state;

  //   if('js-toggle-trigger' in data.attributeList) {
  //     const attributeListCopy = this.props.copyState(data.attributeList);

  //     attributeListCopy['js-toggle-trigger'] = toggleId;
  //     attributeListCopy['js-toggle-item'] = toggleId;

  //     this.setState({
  //       attributeList: attributeListCopy
  //     });
  //   }
  // }

  
  // setSize = () => (!this.state.text && this.state.icon) ? `__icon-size--${this.state.size}` : `--${this.state.size}`;
  
  // prependBaseClass = (...classNames) => classNames.map(name => `${this.state.baseClass}${name}`);
  
  renderButton = () => {
    const {baseClass, labelMod, text, icon, slot} = this.state;
  
    if (text && icon) {
      return (
        <span className={`${baseClass}__label-text${labelMod}`}>
            {text}
        </span>
      )
    } else if (text && !icon) {
      return (
        <span className={`${baseClass}__label-text${labelMod}`}>
            {text}
        </span>
      )
    } else if (icon && !text) {
      return (
        <i className="icon"></i>
      )
    }
  
    if (slot) {
      return (
        {slot}
      )
    }
  
    return (
      <></>
    );
  
  };
  
  render() {

    const data = this.state;
    const { id, target, pressed, href, baseClass } = data;

    const ComponentElement = `${data.componentElement}`;
    const LabelElement = `${data.labelElement}`;

    return (
      <>
        <ComponentElement id={id} target={target} aria-pressed={pressed} href={href} className={data.classList.join(' ')} {...data.attributeList}>
          <LabelElement className={`${baseClass}__label`}>
            {this.renderButton()}
          </LabelElement>
        </ComponentElement>
      </>
    );
  }
};
