'use strict';

/*-----------------------------------------------
|   Demo mode
-----------------------------------------------*/

window.utils.$document.ready(() => {
  const { utils, location } = window;

  const Event = { CHANGE: 'change' }

  const Selector = {
    DARK: '#mode-dark',
    RTL: '#mode-rtl',
    FLUID: '#mode-fluid'
  }

  const DATA_KEY = { 
    URL: 'url',
    HOME_URL: 'home-url'
  }

  // Redirect on Checkbox change
  const handleChange = (selector) => {
    utils.$document.on(Event.CHANGE, selector, (e) => {
      const $this = $(e.currentTarget);
      const isChecked = $this.prop('checked');
      if(isChecked){
        const url = $this.data(DATA_KEY.URL);
        location.replace(url);
      }else{
        const homeUrl = $this.data(DATA_KEY.HOME_URL);
        location.replace(homeUrl);
      }

    });
  }
  
  // Mode checkbox handler
  handleChange(Selector.DARK);
  handleChange(Selector.RTL);
  handleChange(Selector.FLUID);

});
