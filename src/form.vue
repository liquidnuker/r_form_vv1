<template>
<div id="vee-form">
  <form class="form1">
    <!-- username -->
    <label for="username">username required|alpha|max:6</label>
    <small v-show="errors.has('username')">{{ errors.first('username') }}</small>
    <input class="col-sm-12" v-validate="'required|alpha|max:6'" type="text" name="username">
    <!-- email -->
    <label for="email">Email</label>
    <small v-show="errors.has('email')">{{ errors.first('email') }}</small>
    <input class="col-sm-12" v-validate="'required|email'" type="text" name="email">

    <!-- password -->    
    <label for="password">Password</label>
    <input class="col-sm-12" v-validate="'required|confirmed:password_confirm'" name="password" type="password">
    <small v-show="fields.failed('password')">{{ errors.first('password') }}</small>
    
    <!-- passwordconfirm -->
    <label for="password_confirm">Confirm Password</label>
    <input class="col-sm-12" name="password_confirm" type="password">
  </form>
</div>
</template>