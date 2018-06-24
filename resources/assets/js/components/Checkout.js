import React from 'react';
import ReactDOM from 'react-dom';
import store from "../store";
import { isInt } from "../helpers";


class Checkout extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      products: [],
      form: {
        name: {value:""},
        phone: {value:""},
        email: {value:""},
        comment: {value: ""},
        address:{value:""},
        call: {value:""},
        payment: {value: "cash"},
        delivery: {value: "nova_poshta"}
      },
      submited: false,
    }

    this.minus = this.minus.bind (this);
    this.plus = this.plus.bind (this);
    this.deleteProduct = this.deleteProduct.bind(this);
    this.loadFromStorage = this.loadFromStorage.bind(this);
    this.handleChange = this.handleChange.bind(this);
    this.prodQuantityChange = this.prodQuantityChange.bind(this);
    this.submit = this.submit.bind(this);
  }


  componentDidMount () {
    this.loadFromStorage();
    document.addEventListener('added', this.loadFromStorage);
  }

  prodQuantityChange(value, prod_id) {
    // let products = this.state.products
    //                     .findIndex(p => p.id == prod_id)
    //                     .map()
  }

  componentWillUnmount(){
    console.log('component unmount with state: ', this.state);
  }

  loadFromStorage() {
    const cart = store.read('cart');
    const form = store.read('form');

    if(cart){
      this.setState({products: cart});
    }
    if(form){
      this.setState({form});
    }
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

  handleChange(event) {
    const form = { ...this.state.form };
    const target = event.target;
    const value = target.type === 'checkbox' ? target.checked : target.value;
    const name = target.name;
    form[name].value = value;
    this.setState({form: form});
  }

  submit() {
    let { products, submited } = this.state;
    let form = this.state.form;
    // !!!!!!!!!!
    // validation Must be required with some UI !
    // !!!!!!!!!
    if (!submited) {
      submited = true;
      store.write('form', form);

      let formValues = {};
      Object.keys(form).map( k => { formValues[k] = form[k].value });

      (function () {
          window.axios.post('/checkout', {
            ...formValues, products
          })
            .then(r => {
              let id = r.data;
              console.log(id);
              if(id && isInt(id)){
                store.write('cart', []);
                window.location.href = `checkout/order/${id}` ;
              }
            } )
            .catch(e => console.log(e));
      })();
    }
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

  render() {
    const { products, form } = this.state;
    return (
      <div className="row order-form">
      <div className="products-list-box col-xs-12 col-sm-11 col-sm-offset-1">
          <h2>
              <img src="/img/Icon1.png" /> Заказ
          </h2>
          <div className="col-sm-11 product-box">
            {products.map(prod=> <div key={prod.id} className="row">
                  <div className="col-xs-4 col-sm-2">
                      <img src={prod.image} height="75px" />
                  </div>
                  <div className="col-xs-10 col-sm-4 title-box">
                      <span>{prod.name}</span>
                  </div>
                  <div className="col-xs-8 col-sm-3">
                      <div className="col-xs-12 input-group group-quantity">
                          <span className="input-group-btn">
                              <button type="button"
                                      onClick={e => this.minus (prod.id, prod.size)}
                                      className="quantity-left-minus btn btn-quantity"
                              >
                                  <i className="fas fa-minus"></i>
                              </button>
                          </span>
                          <input type="text" id="quantity" name="quantity"
                                 onChange={e =>
                                   this.prodQuantityChange (e.target.value, prod.id)}
                                 className="form-control input-quantity"
                                 value={prod.q} min="1" max="100" />
                          <span className="input-group-btn">
                              <button type="button"
                                      className="quantity-right-plus btn btn-quantity"
                                      onClick={e => this.plus (prod.id, prod.size)}
                              >
                                  <i className="fas fa-plus"></i>
                              </button>
                          </span>
                      </div>
                      <div className="col-xs-12 price-box visible-xs">
                          <span>{prod.price} грн</span>
                      </div>
                  </div>
                  <div className="price-box col-sm-2 hidden-xs">
                      <span>{prod.price} грн</span>
                  </div>
                  <div className="col-xs-2 col-sm-1 close-box">
                      <button className="btn btn-primary green btn-close">
                          <i className="fas fa-times"></i>
                      </button>
                  </div>
              </div>
            )}
          </div>

          <div className="col-xs-12 col-sm-11 products-list-footer">
              <span>Всего к оплате</span>
              <span className="sum-price">
                  <b>{products.reduce((s, p)=>{
                    return s + ( parseFloat(p.price) * parseInt(p.q) )
                  }, 0)} грн</b>
              </span>
          </div>
          <button className="btn btn-primary green big-btn btn-buy-order visible-xs" onClick={this.submit}>
              <span>Оформить заказ</span>
              <i className="black">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 31.49 31.49" style={{background: 'rgba(0 0 31.49 31.49)'}} xmlSpace="preserve">
                      <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                               C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                               c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                      />
                  </svg>
              </i>
          </button>
      </div>
      <div className="form-box col-xs-12 col-sm-5 col-sm-offset-1">
          <h2>
              <img src="../img/Icon2.png" /> Данные о покупателе
          </h2>
          <form action="/action_page.php">
              <div className="form-group">
                  <label htmlFor="name">Введите имя:</label>
                  <input onChange={this.handleChange}  type="text" value={form.name.value} name="name" className="form-control" placeholder="Игорь Обуховский" />
              </div>
              <div className="form-group">
                  <label htmlFor="phone">Введите телефон:</label>
                  <input onChange={this.handleChange}  type="tel" id="phone" value={form.phone.value} name="phone" className="form-control" placeholder="+380 096 123 45 67" />
              </div>
              <div className="form-group">
                  <label htmlFor="email">E-mail:</label>
                  <input onChange={this.handleChange} value={form.email.value}  type="email" id="email" name="email" className="form-control" placeholder="boss@zhirkiller.info" />
              </div>
              <div className="form-group">
                  <label htmlFor="comment">Комментарий к заказу</label>
                  <textarea  onChange={this.handleChange} value={form.comment.value} name="comment" id="comment" className="form-control" rows="3"></textarea>
              </div>
          </form>
      </div>
      <div className="form-box col-xs-12 col-sm-5 col-md-4 col-md-offset-1">
          <h2>
              <img src="../img/Icon.png" /> Доставка
          </h2>
          <form action="/checkout.php" method="POST">
              <div className="form-group">
                  <label htmlFor="address">* Адрес доставки:</label>
                  <input onChange={this.handleChange}  value={form.address.value}  required={'required'}  type="text" id="address" name="address" className="form-control" placeholder="г. Киев, ул. Носова, 23\10" />
              </div>
              <div className="form-group">
                  <label htmlFor="delivery">* Выберите метод доставки:</label>
                  <select onChange={this.handleChange} value={form.delivery.value}   name="delivery" id="delivery" className="form-control">
                      <option value="nova_poshta">Новая почта</option>
                  </select>
              </div>
              <div className="form-group">
                  <label htmlFor="payment">* Выберите метод оплаты:</label>
                  <select onChange={this.handleChange} value={form.payment.value}  name="payment" id="payment" className="form-control">
                      <option value="cach">Наличными при получении</option>
                      <option value="liqpay">Картой</option>
                  </select>
              </div>
              <div className="form-group checkbox">
                  <label>
                      <input onChange={this.handleChange} value={form.call.value}  type="checkbox" name="call" />
                      <span className="cr">
                          <i className="cr-icon glyphicon glyphicon-ok"></i>
                      </span>
                      <span className="text-justify">Мне не нужно перезванивать</span>
                  </label>
              </div>
              <button className="btn btn-primary green big-btn btn-buy-order hidden-xs" onClick={this.submit}>
                  <span>Оформить заказ</span>
                  <i className="black">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 31.49 31.49" style={{ background: 'rgba(0 0 31.49 31.49)'}} xmlSpace="preserve">
                          <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                               C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                               c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                          />
                      </svg>
                  </i>
              </button>
          </form>
      </div>
  </div>
    );
  }
}


let checkout = document.getElementById('checkout');
if ( checkout ){
  ReactDOM.render (<Checkout />, checkout)
}