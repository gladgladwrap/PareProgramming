<form class="form-signin" method="POST" action="/service-requests">

  {{ csrf_field() }}
    <div class="text-center mb-4">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Get In Touch!</h1>
      <p>Have a look below for a list of services that we provide. Feel free to ask us for help with anything you may need!</p>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Name" required autofocus>
      <label for="inputName">Your Name</label>
    </div>

    <div class="form-label-group">
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
      <textarea id="ClientMessage" name="ClientMessage" class="form-control" placeholder="Tell us what you need"></textarea>
      <label for="inputClientMessage">Message</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    
  </form>