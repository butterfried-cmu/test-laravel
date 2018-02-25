<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

  <title>Vue.js Navigation Menu</title>

</head>
<body>

  <div id="main">

    <!-- The navigation menu will get the value of the "active" variable as a class. -->
    <!-- To stops the page from jumping when a link is clicked we use the "prevent" modifier (short for preventDefault). -->

    <div class="uk-container">

      <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
        <h3 class="uk-card-title">Registration</h3>
      </div>

      <nav v-bind:class="active" class="uk-navbar-container" uk-navbar uk-sticky="bottom: #offset">
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
            <li><a href="#" class="home" v-on:click="makeActive('home')">Home</a></li>
            <li><a href="#" class="projects" v-on:click="makeActive('projects')">Projects</a></li>
            <li><a href="#" class="services" v-on:click="makeActive('services')">Services</a></li>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li><a href="#" class="login" v-on:click="makeActive('login')">Login</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="uk-container">

      <p>You chose <b>{{active}}</b></p>
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test
      <br>test<br>test

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
  <script>
  // Creating a new Vue instance and pass in an options object.
  var demo = new Vue({

    // A DOM element to mount our view model.
    el: '#main',

    // Define properties and give them initial values.
    data: {
      active: 'home'
    },

    // Functions we will be using.
    methods: {
      isActive: function (menuItem) {
        return this.activeItem === menuItem
      },
      makeActive: function(item){
        // When a model is changed, the view will be automatically updated.
        this.active = item;
      }
    }
  });
</script>
</body>
</html>
