<template>
<div id="vee-form">
  <form>
    <!-- email -->
    <label for="email">Email</label>
    <p v-show="errors.has('email')">{{ errors.first('email') }}</p>
    <input class="col-sm-12" v-validate="'required|email'" type="text" name="email">
  </form>
</div>
</template>