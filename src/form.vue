<template>
<div id="vee-form">
  <form>
    <input v-validate="'required|email'" type="text" name="email">
    <span v-show="errors.has('email')">{{ errors.first('email') }}</span>
  </form>
</div>
</template>