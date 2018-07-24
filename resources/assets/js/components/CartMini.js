import React from 'react';
import { render } from 'react-dom';
import store from '../store';

class CartMini extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      products: []
    };
    this.loadFromStorage = this.loadFromStorage.bind(this);
  }

  loadFromStorage() {
    const cart = store.read('cart');
    if(cart){
      this.setState({products: cart })
    }
  }

  componentDidMount(){
    this.loadFromStorage();
    document.addEventListener('added', this.loadFromStorage);
  }

  render() {
    const { products } = this.state;
    return(
      <a href="#"  onClick={ () => document.dispatchEvent(new Event('added')) } >
        <i className="fas fa-shopping-cart"></i>
        <span className="hidden-xs"> Товаров добавлено </span>
        <span className="label green">{products.length}</span>
      </a>
    )
  }
}
const carts = document.querySelectorAll('.cart-mini');
if(carts && carts.length) {
  for(let i=0; i<carts.length; i++){
    render(<CartMini />, carts[i]);
  }
}