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

const elements = [
  {
    el: document.querySelector('[data-react-id="123"]'),
    component: <Button customProps={buttonProps}/>
  },
  {
    el: document.querySelector('[data-react-id="1234"]'),
    component: <Button customProps={buttonProps2}/>
  },
  {
    el: document.querySelector('[data-react-id="12345"]'),
    component: <Button customProps={buttonProps}/>
  },
  {
    el: document.querySelector('[data-react-id="123456"]'),
    component: <Button customProps={buttonProps2}/>
  }
]


const renderElements = (bladeProps, component, element) => {
  ReactDOM.render(<BaseController component={component} bladeProps={bladeProps}/>, element);
};

for (let value of elements) {
  const data = JSON.parse(value.el.getAttribute('data-js'));
  renderElements(data, value.component, value.el);
}