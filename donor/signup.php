<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign In</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body class="container mx-auto font-poppins bg-red-50">
  <header>
    <nav class="flex justify-between items-center py-4 px-6 mt-2 bg-white rounded-r-full rounded-l-full shadow-lg">
      <div>
        <h1 class="text-2xl font-bold text-red-700 tracking-tighter">
          BloodLink
        </h1>
      </div>
      <div class="flex space-x-3 items-center">
        <a href="index.html" class="text-lg hover:text-red-700">Home</a>
        <a href="#about" class="text-lg hover:text-red-700">About Us</a>
        <a href="../admin/login.php" class="text-lg bg-red-700 py-1.5 px-3 rounded-md text-white hover:bg-red-500">Admin
          Login</a>
      </div>
    </nav>
  </header>
  <div class="flex justify-center items-center">
    <div class="m-2">
      <h2 class="text-2xl text-red-700 text-center">REGISTER</h2>
      <p class="mb-2 text-center text-sm">~ Tell us about yourself ~</p>
      <form class="w-full" style="" action="registration.php" method="POST">
        <div class="grid grid-cols-2 gap-6">
          <div>
            <div>
              <label class="">First Name</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your first name" name="fname" />
            </div>
            <div>
              <label class=""> Last Name</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your last name" name="lname" />
            </div>
            <div>
              <label class="">Email</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="email"
                placeholder="Enter your email (abc@gmail.com)" name="email" />
            </div>
            <div>
              <label class=""> Phone Number</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your Phone number (08024370107)" name="phoneNumber" />
            </div>
            <div>
              <label class="">Date of Birth</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your date of birth (03/06/2004)" name="dob" />
            </div>
            <div>
              <label class="">Height</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your Height (180cm)" name="height" />
            </div>
            <div>
              <label class="">Weight</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your Weight (75kg)" name="weight" />
            </div>
          </div>
          <div>
            <div>
              <label class=""> Genotype</label>
              <select name="genotype" class="bg-slate-200 border border-red-500 rounded-lg w-full py-1 px-2">
                <option value="AA">AA</option>
                <option value="AS">AS</option>
                <option value="AC">AC</option>
                <option value="SS">SS</option>
                <option value="SC">SC</option>
                <option value="CC">CC</option>
              </select>
            </div>
            <div>
              <label class=""> Blood Type</label>
              <select name="bgroup" class="bg-slate-200 border border-red-500 rounded-lg w-full py-1 px-2">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
            <div>
              <label class=""> House Number</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your House Number" name="hsno" />
            </div>
            <div>
              <label class=""> Street Name</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your Street Name" name="streetname" />
            </div>
            <div>
              <label class="">City</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your City of residence" name="city" />
            </div>
            <div>
              <label class=""> Country</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your Country" name="country" />
            </div>

            <div>
              <label class=""> Password</label>
              <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                placeholder="Enter your password" name="pwd" />
            </div>
          </div>
        </div>

        <p class="text-center mt-5">
          Already registered?
          <a href="login.php" class="text-red-700 font-semibold hover:text-red-500">Login</a>
        </p>
        <div class="text-center flex flex-col justify-center items-center">
          <button type="submit" style="" class="bg-red-700 text-white mt-2 py-1 w-3/6 rounded-lg hover:bg-red-500">
            Register
          </button>
          <a href="../hospital/signup.php"
            class="bg-blue-700 text-white mt-2 py-1 w-3/6 rounded-lg hover:bg-blue-500">Register as a Hospital</a>
            <a href="../requester/signup.php" class="outline text-sm outline-blue-700 text-blue-700 mt-2 py-1 w-4/6 rounded-lg hover:bg-blue-500" style="">
            Register as a Requester</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>