<template>
<div id="vee-form">
  <!-- name target -->
  <form class="form1" 
  id="form" name="form" @submit="validate($event)" method="POST">
    <!-- username -->
    <label for="username">username: required|alpha|max:6</label>
    <small v-show="errors.has('username')" role="alert">{{ errors.first('username') }}</small>
    <input id="username" v-validate="'required|alpha|max:6'" type="text" name="username" v-model="name">

    <!-- email -->
    <label for="email">Email</label>
    <small v-show="errors.has('email')" role="alert">{{ errors.first('email') }}</small>
    <input id="email" v-validate="'required|email'" type="text" name="email" v-model="email">

    <!-- password -->
    <label for="password">Password</label>
    <small v-show="fields.failed('password')" role="alert">{{ errors.first('password') }}</small>
    <input id="password" v-validate="'required|confirmed:password_confirm'" name="password" type="password" v-model="password">
    
    <!-- passwordconfirm -->
    <label for="password_confirm">Confirm Password</label>
    <input id="password_confirm" name="password_confirm" type="password" v-model="confirmpassword">

    <!-- file  -->
    <label for="f_file">Choose file to upload</label>
    <input type="file" name="f_file"
    v-validate="'required|image'"
    v-on:change="handleFileUpload($event)"
    accept=".jpg, .gif, .png, .jpeg" />
    <small v-show="errors.has('f_file')" role="alert">{{ errors.first('f_file') }}</small>

    <!-- agree -->
    <small v-show="errors.has('terms')" role="alert">{{ errors.first('terms') }}</small>
    <label for="terms">
      <input name="terms" id="terms" v-validate="'required'" type="checkbox" v-model="agree">
      agree terms
    </label>

    <br />
    <!-- captcha -->
    <img :src="captchaImg" />
    <label for="captcha">Enter above text</label>
    <small v-show="errors.has('f_captcha')" role="alert">{{ errors.first('f_captcha') }}</small>
    <input id="captcha" name="f_captcha" type="text" v-model="captchaText" v-validate="'required'">

    <button type="submit">Submit</button>
    
  </form>
</div>
</template>
<script>
import axios from "axios";
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

import { Validator } from 'vee-validate';
const validator = new Validator();

export default {
  data() {
      return {
        name: "",
        email: "",
        password: "",
        confirmpassword: "",
        file: "",
        agree: false, 

        captchaImg: "",
        captchaText: ""       

      };
    },
    mounted: function () {
      this.getCaptcha();
    },
    methods: {
      handleFileUpload: function (e) {
        this.file = e.target.files[0];
        // this.file = this.$refs.file.files[0];
      },
      getCaptcha: function() {
        let self = this;
        axios.get("./src/php/captcha.php")
        .then(function (response) {
          self.captchaImg = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
      },
      submitFile: function () {
        let formData = new FormData();
        formData.append("f_name", this.name);
        formData.append("f_email", this.email);
        formData.append("f_password", this.password);
        formData.append("f_agree", this.agree);
        formData.append("f_captcha", this.captchaText);

        formData.append("f_file", this.file);

        // let self = this;
        axios.post("./src/php/validate.php", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
        }).then(function (response) {
          console.log(response.data);
        }).catch(function () {
          console.log("error");
        });
      },
      validate: function (e) {
        e.preventDefault(); 

        this.submitFile();

        this.$validator.validateAll().then(() => {
          // ok
          console.log("valid");
          // this.submitFile();
        }).catch(() => {
          console.log("invalid");
          // return false;   
        });
               
      }
    }
}; 
</script>