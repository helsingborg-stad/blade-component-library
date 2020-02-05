import React, { Component } from 'react';
import uniqid from 'uniqid';

export default class Button extends Component {
  constructor(props) {
    super(props);

    console.log('Props in button!', props);

    const { type, color } = props.data.default;

    this.state = {
      id: uniqid(),
      slug: props.data.slug,
      classList: {
        typeClass: `__${type}`,
        colorClass: `__${type}--${color}`
      },
      ...props.data.default,
    };
    
  }

  componentDidMount() {
    this.init();
  }

  init = () => {
    const { toggle, ripple, reversePositions } = this.state;

    const classNames = [];

    const sizeClass = this.setSize();
    classNames.push(this.prependBaseClass(sizeClass));

    if (ripple) classNames.push('ripple', 'ripple--before');
    if (toggle) { 
      classNames.push(this.prependBaseClass('__toggle'));
      this.setToggleAttributes();
    }
    if (reversePositions) {
      this.setState({
        labelMod: '--reverse'
      });
    }

    this.setState({
      classList: {...classNames.flat(Infinity)}
    })
  }

  setToggleAttributes = () =>
  {
    const toggleId = uniqid();
    const data = this.state;

    if('js-toggle-trigger' in data.attributeList) {
      const attributeListCopy = this.copyState(data.attributeList);

      attributeListCopy['js-toggle-trigger'] = toggleId;
      attributeListCopy['js-toggle-item'] = toggleId;

      this.setState({
        attributeList: attributeListCopy
      });
    }
  }

  setSize = () => (!this.state.text && this.state.icon) ? `__icon-size--${this.state.size}` : `--${this.state.size}`;

  prependBaseClass = (...classNames) => classNames.map(name => `${this.getBaseClass()}${name}`);

  getBaseClass = () => 'c-button';

  copyState = (state) => JSON.parse(JSON.stringify(state));

  render() {

    const data = this.state;

    const ComponentElement = `${data.componentElement}`;
    const LabelElement = `${data.labelElement}`;

    return (
      <>
        <ComponentElement id={'hej'} className="className" target="target" aria-pressed="pressed" href="href" {...data.attributeList}>
          <LabelElement className={`${data.baseClass}__label`}>
            <RenderButton {...data}/>
          </LabelElement>
        </ComponentElement>
      </>
    );
  }
};

const RenderButton = props => {
  const {baseClass, labelMod, text, icon, slot} = props;

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
