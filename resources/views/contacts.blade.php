@extends('layouts.poly')

@section('mycss')
<style>
    /* color:  red#ec1c24, black#212d31, grey#343a40, white#eee  */
* {
  box-sizing: border-box;
}

body {
  padding: 1rem;
  color: #212d31;
  font-family: 'Roboto', sans-serif;
}

.contain {
  background-color: #eee;
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

div.form {
  background-color: #eee;
}
.contact-wrapper {
  margin: auto 0;
}

.submit-btn {
  float: left;
}
.reset-btn {
  float: right;
}

.form-headline:after {
  content: "";
  display: block;
  width: 10%;
  padding-top: 10px;
  border-bottom: 3px solid #ec1c24;
}

.highlight-text {
  color: #ec1c24;
}

.hightlight-contact-info {
  font-weight: 700;
  font-size: 22px;
  line-height: 1.5;
}

.highlight-text-grey {
  font-weight: 500;
}

.email-info {
    margin-top: 20px;
}

::-webkit-input-placeholder { /* Chrome */
  font-family: 'Roboto', sans-serif;
}

.required-input {
  color: black;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}

.form-input:focus,
textarea:focus{
  outline: 1.5px solid #ec1c24;
}

.form-input,
textarea {
  width: 100%;
  border: 1px solid #bdbdbd;
  border-radius: 5px;
}

.wrapper > * {
  padding: 1em;
}
@media (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
  }
  .wrapper > * {
    padding: 2em 2em;
  }
}

ul {
  list-style: none;
  padding: 0;
}

.contacts {
  color: #212d31;
}

.form {
  background: #fff;
}

form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
form label {
  display: block;
}
form p {
  margin: 0;
}

.full-width {
  grid-column: 1 / 3;
}

button,
.submit-btn,
.form-input,
textarea {
  padding: 1em;
}

button, .submit-btn {
  background: transparent;
  border: 1px solid #ec1c24;
  color: #ec1c24;
  border-radius: 15px;
  padding: 5px 20px;
  text-transform: uppercase;
}
button:hover, .submit-btn:hover,
button:focus , .submit-btn:focus{
  background: #ec1c24;
  outline: 0;
  color: #eee;
}
.error {
  color: #ec1c24;
}


</style>
@endsection

@section('aside')
<h3>
contact page sidebar
</h3>
@endsection

@section('content')
<h1>Contact Page</h1>
<div class="contain">

    <div class="wrapper">
  
      <div class="form">
        <h4>GET IN TOUCH</h4>
        <h2 class="form-headline">Send us a message</h2>
        <form id="submit-form" action="">
          <p>
            <input id="name" class="form-input" type="text" placeholder="Your Name*">
            <small class="name-error"></small>
          </p>
          <p>
            <input id="email" class="form-input" type="email" placeholder="Your Email*">
            <small class="name-error"></small>
          </p>
          <p class="full-width">
            <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
            <small></small>
          </p>
          <p class="full-width">
            <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
            <small></small>
          </p>
          <p class="full-width">
            <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
          </p>
          <p class="full-width">
            <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
            <button class="reset-btn" onclick="reset()">Reset</button>
          </p>
        </form>
      </div>
  
      <div class="contacts contact-wrapper">
  
        <ul>
          <li>We've driven online revenues of over <span class="highlight-text-grey">$2
              billion</span> for our clients. Ready to know
            how we can help you?</li>
          <span class="hightlight-contact-info">
            <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+91 11 1111 2900</span></li>
          </span>
        </ul>
      </div>
    </div>
  </div>
@endsection