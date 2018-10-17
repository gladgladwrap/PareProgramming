<form class="form-signin" method="POST" action="/service-requests">

  {{ csrf_field() }}

    <div class="text-center mb-4">
    
      @include ('layouts.hero-logo')

      <h1 class="h3 mb-3 font-weight-normal">Get In Touch With Us!</h1>
      <p>See below for a list of services that we provide. Feel free to ask us for help with anything you may need!</p>
    </div>

    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Services</label>

      <select name="service" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>

        <option disabled selected value>Choose one of the following...</option>

        <option value="webdev">Web Development</option>
        <option value="design">Web Design</option>
        <option value="small-claims">Small Claims Negotiation</option>
        <option value="tutoring">Tutoring</option>
        <option value="other">Other</option>

      </select>

    </div>

    <div class="form-label-group mb-4">

      <label for="message">Message</label>

      <textarea name="message" class="form-control" placeholder="Tell us how we can help you!" required></textarea>
      
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    
  </form>

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif