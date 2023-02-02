<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="justify-center items-center">
      <div class="block p-6 rounded-lg shadow-lg  bg-white max-w-sm">
        <form action="{{ route('user.login')}}" method="POST">
          @csrf
          <div class="form-group mb-6">
            <label for="018***" class="form-label inline-block mb-2 text-gray-700">Mobile Number</label>
            <input type="Number" name ="mobile_number" class="form-control 
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2"
              aria-describedby="emailHelp" placeholder="Mobile Number">
          </div>
          <div class="form-group mb-6">
            <label for="exampleInputPassword2" class="form-label inline-block mb-2 text-gray-700">Password</label>
            <input type="password" name="password" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword2"
              placeholder="Password">
          </div>
        
          <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Sign in</button>
            <p class="text-gray-800 mt-6 text-center">Not a member? <a href="{{ route('user.registrar') }}"
              class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Register</a>
          </p>
        </form>
      </div>
    </div>
</body>
</html>