import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import store from '../store';

const event = new Event('added');

const AddToCart = (props) => {

  const addItem = () => {
    let item = { ...props }
    if(document.querySelector('.product-size')){
        if( document.querySelector('input[name="size"]:checked') === null ){
           return alert('Пожалуйста, выберите размер');
        } else {
          item.size = document.querySelector('input[name="size"]:checked').value;
        }
    }
    const cart = store.read('cart') ? store.read('cart') : [];
    let product = cart.findIndex( o => {
      let i= { ...item };
      let object = { ...o };
      delete object.q;
      delete i.q;
      return JSON.stringify(object) === JSON.stringify(i)
    } );
    if(product > -1){
      console.log(cart[product]);
      cart[product].q = parseInt(cart[product].q) + 1;
    } else {
      item.q = 1;
      cart.push(item);
    }
    store.write('cart', cart);
    document.dispatchEvent(event);
  };

  return (
    <button
      style={{width: '100%'}}
      className="btn btn-primary green big-btn" onClick={addItem}>
      <span>Купить</span>
      <i className="black">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style={{background: 'rgba(0 0 31.49 31.49'}} xmlSpace="preserve">
          <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                              C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                              c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path>
        </svg>
      </i>
    </button>
  );
}

let button = document.getElementById('add-to-cart');

if(button) {
  let { id, name, image, price } = button.dataset;
  ReactDOM.render (<AddToCart id={id} name={name}  image={image} price={price}/>, document.getElementById('add-to-cart'));
}