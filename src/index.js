import "./styles/main.scss";
import Vue from 'vue';
import veeForm from './form.vue'

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

const renderComponent = new Vue({
  el: '#vee-form-holder',
  render: h => h(veeForm)
});


