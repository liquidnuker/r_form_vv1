<template>
<div id="vee-form">
  <form class="form1">
    <!-- username -->
    <label for="username">username required|alpha|max:6</label>
    <small v-show="errors.has('username')">{{ errors.first('username') }}</small>
    <input class="col-sm-12" id="username" v-validate="'required|alpha|max:6'" type="text" name="username">
    <!-- email -->
    <label for="email">Email</label>
    <small v-show="errors.has('email')">{{ errors.first('email') }}</small>
    <input class="col-sm-12" id="email" v-validate="'required|email'" type="text" name="email">
    <!-- password -->
    <label for="password">Password</label>
    <input class="col-sm-12" id="password" v-validate="'required|confirmed:password_confirm'" name="password" type="password">
    <small v-show="fields.failed('password')">{{ errors.first('password') }}</small>
    
    <!-- passwordconfirm -->
    <label for="password_confirm">Confirm Password</label>
    <input class="col-sm-12" id="password_confirm" name="password_confirm" type="password">
    
    <!-- agree -->
    <small v-show="errors.has('terms')">{{ errors.first('terms') }}</small>
    <label for="terms">
    <input name="terms" id="terms"v-validate="'required'" type="checkbox">
    agree terms
    </label>
    
  </form>
</div>
</template>