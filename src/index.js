import "./styles/main.scss";
// import Vue from 'vue';

const veeForm = () => import('./form.vue');

new Vue({
  el: "#vee-form-holder",
  // router,
  render: h => h(veeForm)
});


