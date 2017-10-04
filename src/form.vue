<template>
<div id="vee-form">
  <!-- name target -->
  <form class="form1">
    <!-- username -->
    <label for="username">username: required|alpha|max:6</label>
    <small v-show="errors.has('username')" role="alert">{{ errors.first('username') }}</small>
    <input id="username" v-validate="'required|alpha|max:6'" type="text" name="username">
    <!-- email -->
    <label for="email">Email</label>
    <small v-show="errors.has('email')" role="alert">{{ errors.first('email') }}</small>
    <input id="email" v-validate="'required|email'" type="text" name="email">
    <!-- password -->
    <label for="password">Password</label>
    <small v-show="fields.failed('password')" role="alert">{{ errors.first('password') }}</small>
    <input id="password" v-validate="'required|confirmed:password_confirm'" name="password" type="password">    
    
    <!-- passwordconfirm -->
    <label for="password_confirm">Confirm Password</label>
    <input id="password_confirm" name="password_confirm" type="password">    
    <!-- agree -->
    <small v-show="errors.has('terms')" role="alert">{{ errors.first('terms') }}</small>
    <label for="terms">
      <input name="terms" id="terms"v-validate="'required'" type="checkbox">
      agree terms
    </label>
    
  </form>
</div>
</template>