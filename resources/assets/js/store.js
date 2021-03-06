if (!localStorage) {
  console.log("LocaleStorage is not supported, data will not be persisted");

  // Let the program use a stub object to proceed
  localStorage = {};
  localStorage.prototype.removeItem = function(key) {
    this[key] = null;
  };
  localStorage.prototype.setItem = function (key, value) {
    this[key] = value;
  }
}

const store = {
  read(key) {
    if (localStorage[key])
      return JSON.parse(localStorage[key])

    return null;
  },

  write(key, value) {
    localStorage.setItem(key, JSON.stringify(value))
  },

  clear(key) {
    localStorage.removeItem(key);
  }
}

export default store;