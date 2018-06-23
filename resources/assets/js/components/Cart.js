import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import store from '../store';
import { Modal } from 'react-bootstrap';


class Cart extends Component {
  constructor(props, context) {
    super(props, context);
    this.state = {
      products: [],
      show: false
    };
    this.loadFromStorage = this.loadFromStorage.bind(this);
    this.handleShow = this.handleShow.bind(this);
    this.handleClose = this.handleClose.bind(this);
    this.checkout = this.checkout.bind (this);
    this.prodQuantityChange = this.prodQuantityChange.bind (this);
    this.minus = this.minus.bind (this);
    this.plus = this.plus.bind (this);
    this.deleteProduct = this.deleteProduct.bind(this);
  }

  loadFromStorage() {
    console.log('loading from storage')
    const cart = store.read('cart');
    if(cart){
      this.setState({products: cart })
    }
  }

  handleClose() {
    this.setState({ show: false });
  }

  handleShow() {
    this.loadFromStorage();
    this.setState({ show: true });
  }

  componentDidMount () {
    this.loadFromStorage();
    document.addEventListener('added', this.loadFromStorage);
  }

  deleteProduct(id, size=null) {
    const products = [ ...this.state.products ];
    let prod;
    if(size){
      prod = products.findIndex( o => ( id === o.id && o.size === size ));
    } else {
      prod = products.findIndex( o =>  id === o.id );
    }
    products.splice(prod, 1);
    this.setState( { products: products });
    store.write('cart', products);
  }

  checkout () {}

  prodQuantityChange (value, id) {}

  minus (id, size = null) {
    const products = [ ...this.state.products ];
    let prod;
    if(size){
      prod = products.findIndex( o => ( id === o.id && o.size === size ));
    } else {
      prod = products.findIndex( o => ( id === o.id ));
    }
    if(products[prod].q > 1){
      products[prod].q = products[prod].q - 1;
    } else {
      products.splice(prod, 1);
    }
    this.setState( { products: products });
    store.write('cart', products);
  }

  plus (id, size = null) {
    const products = [ ...this.state.products ];
    let prod;
    if(size){
      prod = products.findIndex( o => ( id === o.id && o.size === size ) );
    } else {
      prod = products.findIndex( o => ( id === o.id ) );
    }
    products[prod].q = products[prod].q + 1;
    this.setState( { products: products });
    store.write('cart', products);
  }

  render () {
    const  { products } =  this.state;
    return (
      <div className="shoping-cart">

        <a href="#"  onClick={this.handleShow}>
          <i className="fas fa-shopping-cart"></i> <span className="hidden-xs">Товаров добавлено</span>
          <span className="label green">{ products.length }</span>
        </a>

        <Modal show={this.state.show} className="modal-cart" onHide={this.handleClose}>
          <Modal.Header>
            <button className="btn btn-primary green btn-close btn-close-modal" type="button" onClick={this.handleClose}>
              <i className="fas fa-times"></i>
            </button>
            <h4>
              <img src="/img/Icon1.png" />
                Добавленные товары
            </h4>
          </Modal.Header>

          <Modal.Body>
          { products.length === 0 ? 'Корзина пуста. ' : products.map ((prod, i) => (
            <div key={i} className="row product-box">
              <div className="col-xs-4 col-sm-3">
                <img src={prod.image} width="100%" />
              </div>
              <div className="col-xs-8 col-sm-9">
                <div className="row">
                  <div className="col-xs-7 title-box">
                    <span>{prod.name} { prod.size ? ' - '+ prod.size : null }</span>
                  </div>
                  <div className="col-xs-5 close-box">
                    <button onClick={() => this.deleteProduct(prod.id, prod.size)} className="btn btn-primary green btn-close">
                      <i className="fas fa-times" />
                    </button>
                  </div>
                </div>
                <div className="row">
                  <div className="col-xs-12 col-sm-7">
                    <div className="input-group group-quantity">

                      <span className="input-group-btn">
                        <button
                          type="button"
                          className="quantity-left-minus btn btn-quantity"
                          onClick={e => this.minus (prod.id, prod.size)}
                        >
                          <i className="fas fa-minus" />
                        </button>
                      </span>

                      <input
                        type="text"
                        id="quantity"
                        name="quantity"
                        className="form-control input-quantity"
                        value={prod.q}
                        min="1"
                        max="100"
                        onChange={e =>
                          this.prodQuantityChange (e.target.value, prod.id)}
                      />

                      <span className="input-group-btn">
                        <button
                          type="button"
                          className="quantity-right-plus btn btn-quantity"
                          onClick={e => this.plus (prod.id, prod.size)}
                        >
                          <i className="fas fa-plus" />
                        </button>
                      </span>

                    </div>
                  </div>
                  <div className="price-box col-xs-12 col-sm-5">
                    <span>{prod.price} грн</span>
                  </div>
                </div>

              </div>
            </div>
          ))}
        </Modal.Body>
          <Modal.Footer>
            <div className="row">
              <div className="col-xs-12  price-block">
                <a href="/checkout"
                 className="btn btn-primary green big-btn btn-buy-order">
                  <span>Оформить заказ</span>
                  <i className="black">
                    <svg
                      version="1.1"
                      id="Capa_1"
                      xmlns="http://www.w3.org/2000/svg"
                      x="0px"
                      y="0px"
                      viewBox="0 0 31.49 31.49"
                      style={{background: 'rgba(0 0 31.49 31.49)'}}
                    >
                      <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                                         C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                                         c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" />
                    </svg>
                  </i>
                </a>
                <div className="order-price">
                  <div>Всего</div>
                  <div className="sum-price">
                    <b>{products.reduce((s, p)=>{
                      return s + ( parseFloat(p.price) * parseInt(p.q) )
                    }, 0)}</b> грн
                  </div>
                </div>
              </div>
            </div>
          </Modal.Footer>
        </Modal>

      </div>
    );
  }
}

let carts = document.getElementsByClassName ('shop-cart');
if ( carts.length ){
    for(let i=0; i < carts.length; i++){
      ReactDOM.render (<Cart />, carts[i])
    }
}
