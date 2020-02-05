import React from "react";
import ReactDOM from 'react-dom';

// import components
import Button from './Component/Button/Button';
import BaseController from './Component/BaseController';

let buttonProps = {
  slug: 'button',
  default: {
    color: 'default',
    type: 'basic',
    baseClass: 'c-button',
    componentElement: 'button',
    labelElement: 'span',
    icon: false,
    text: 'hej på dig din lilla knapp',
    labelMod: '',
    size: 'md',
    reversePositions: true,
    toggle: true,
    ripple: true,
    attributeList: {'js-toggle-trigger': '', 'js-toggle-item': ''}
  }
}

let buttonProps2 = {
  slug: 'button',
  default: {
    color: 'default',
    type: 'basic',
    baseClass: 'c-button',
    componentElement: 'button',
    labelElement: 'span',
    icon: false,
    text: 'Ge mig uppmärksamhet!',
    labelMod: '',
    size: 'md',
    reversePositions: true,
    toggle: true,
    ripple: true,
    attributeList: {'js-toggle-trigger': '', 'js-toggle-item': '', disabled: true}
  }
}


/* CONCEPT ONE (Directly render component) */

// const elements = {
//   0: {
//     el: document.querySelector('[react-button="customId"]'),
//     component: <Button data={buttonProps}/>
//   },
//   1: {
//     el: document.querySelector('[react-button="customId2"]'),
//     component: <Button data={buttonProps2}/>
//   },
//   2: {
//     el: document.querySelector('[react-text="Primary"]'),
//     component: <Button data={buttonProps}/>
//   },
//   3: {
//     el: document.querySelector('[react-text="Default"]'),
//     component: <Button data={buttonProps2}/>
//   }
// };

/* CONCEPT TWO (Render via BaseController) */

const elements = [
  {
    el: document.querySelector('[react-button="customId"]'),
    component: <Button data={buttonProps}/>
  },
  {
    el: document.querySelector('[react-button="customId2"]'),
    component: <Button data={buttonProps2}/>
  },
  {
    el: document.querySelector('[react-text="Primary"]'),
    component: <Button data={buttonProps}/>
  },
  {
    el: document.querySelector('[react-text="Default"]'),
    component: <Button data={buttonProps2}/>
  }
]


const renderElements = (component, element) => {
  ReactDOM.render(<BaseController component={component} />, element);
};

for (let value of elements) {
  // Following code creates a new wrapper for the element.
  // REMEMEBER: Extract attributes with values from initial element and inject into new wrapper
  console.log(value);
  var parent = value.el.parentNode;
  var wrapper = document.createElement('span');

  wrapper.setAttribute('class', 'react-wrap');

  parent.replaceChild(wrapper, value.el);
  wrapper.appendChild(value.el);

  renderElements(value.component, wrapper);
}