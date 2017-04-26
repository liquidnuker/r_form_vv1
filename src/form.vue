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
  </form>
</div>
</template>