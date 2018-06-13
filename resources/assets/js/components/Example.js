import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class Cart extends Component {
  constructor (props) {
    super (props);
    this.state = {
      sum: 0,
      products: [],
    };
    this.checkout = this.checkout.bind (this);
    this.prodQuantityChange = this.prodQuantityChange.bind (this);
    this.minus = this.minus.bind (this);
    this.plus = this.plus.bind (this);
  }

  componentDidMount () {
    console.log ('mounted');
  }
  checkout () {}

  prodQuantityChange (value, id) {}

  minus (id) {}

  plus (id) {}

  render () {
    return (
      <div className="shoping-cart">
        <div className="modal-body">
          {this.state.products.map (prod => (
            <div className="row product-box">
              <div className="col-xs-4 col-sm-3">
                <img src={prod.img} width="100%" />
              </div>
              <div className="col-xs-8 col-sm-9">
                <div className="row">
                  <div className="col-xs-7 title-box">
                    <span>{prod.name}</span>
                  </div>
                  <div className="col-xs-5 close-box">
                    <button className="btn btn-primary green btn-close">
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
                          onClick={e => this.minus (prod.id)}
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
                          data-type="plus"
                          data-field=""
                          onClick={e => this.plus (prod.id)}
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

        </div>

        <div className="modal-footer">
          <div className="row">
            <div className="col-xs-12  price-block">
              <button
                className="btn btn-primary green big-btn btn-buy-order"
                name="submit"
              >
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
              </button>
              <div className="order-price">
                <div>Всего</div>
                <div className="sum-price">
                  <b>{this.state.sum}</b> грн
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    );
  }
}

if (document.getElementById ('shop-cart')) {
  ReactDOM.render (<Cart />, document.getElementById ('shop-cart'));
}
