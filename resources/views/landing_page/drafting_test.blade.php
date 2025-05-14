
@include('include.function')  
@include('sweetalert::alert')
<link rel="stylesheet" href="{{ asset('drafting_css.css') }}">
<section>
  <div class="container">
    <form> 
      <div class="step step-1 active">
        <div class="form-gerup">
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="first-name">
        </div>
        <div class="form-gerup">
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="last-name">
        </div>
        <div class="form-gerup">
          <label for="nickName">Nick Name</label>
          <input type="text" id="nickName" name="nick-name">
        </div>
        <button type="button" class="setelah-btn">Next</button>
      </div>

      <div class="step step-2">
        <div class="form-gerup">
          <label for="email">Email</label>
          <input type="text" id="email" name="email">
        </div>
        <div class="form-gerup">
          <label for="phone">Phone</label>
          <input type="number" id="phone" name="phone-number">
        </div>
        <button type="button" class="sebelum-btn">Prev</button>
        <button type="button" class="setelah-btn">Next</button>
      </div>

      <div class="step step-3">
        <div class="form-gerup">
          <label for="country">country</label>
          <input type="text" id="country" name="country">
        </div>
        <div class="form-gerup">
          <label for="city">City</label>
          <input type="text" id="city" name="city">
        </div>
        <div class="form-gerup">
          <label for="postCode">Post Code</label>
          <input type="text" id="postCode" name="post-code">
        </div>
        <button type="button" class="sebelum-btn">Prev</button>
        <button type="submit" class="simpan-btn">Submit</button>
      </div>

    </form>
  </div>
</section>
<script type="text/javascript">
const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .setelah-btn");
const prevBtn = document.querySelectorAll("form .sebelum-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
  });
  console.log(inputs);
  form.reset();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}

</script>