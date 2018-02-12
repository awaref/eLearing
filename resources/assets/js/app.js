
require('./bootstrap');

window.Vue = require('vue');



const app = new Vue({
    el: '#app',
    data: {
        test: 'Vue is ok',
    }
});
