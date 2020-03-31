<!DOCTYPE html>
<html>
<head>
	<title>tailwindcss</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body bg-gray-100>
	<h1 class="text-center font-bold text-4xl text-blue-500">Welcome to Tailwind CSS</h1>

	<div class="px-8 py-12 mx-w-md mx-auto">
		<img class="h-10" src="/img/libra.png" alt="libra">
		<img class="mt-6 rounded-lg shadow-xl sm:h-70 sm:mt-6 sm:w-full" src="/img/home.jpg">
		<h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:text-4xl">
			Nice to live here!
			<span class="text-indigo-500">learn more aboute.</span>
		</h1>
		<p class="mt-2 text-justify">
			some text must be writen here. for more information about the home of this city in ku.some text must be writen here. for more information about the home of this city in ku.some text must be writen here. for more information about the home of this city in ku.some text must be writen here. for more information about the home of this city in ku.some text must be writen here. for more information about the home of this city in ku.some text must be writen here. for more information about the home of this city in ku.
		</p>
		<div class="mt-4">
			<a href="#" class="inline-block px-5 py-3 rounded-lg shadow-lg bg-indigo-500 hover:bg-indigo-400 text-sm text-white uppercase tracking-wider font-semibold">Booking now</a>
		</div>
	</div>
	<div class="px-8 py-3">
		<button class="rounded-lg px-5 py-3 shadow-lg bg-indigo-500 hover:bg-indigo-400 text-white font-bold uppercase">
			Booking Now
		</button>
		<button class="ml-2 btn-gray shadow-lg font-bold uppercase hover:bg-gray-100">
			Booking Now
		</button>
		<button class="rounded-lg px-5 py-3 shadow-lg bg-indigo-500 hover:bg-indigo-400 text-white font-bold uppercase">
			Booking Now
		</button>
		<button class="rounded-lg px-5 py-3 shadow-lg bg-indigo-500 hover:bg-indigo-400 text-white font-bold uppercase">
			Booking Now
		</button>
	</div>

	<div class="px-8">
		<a>Link 1 </a>
	</div>

	<div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
  <div class="sm:flex sm:items-center px-6 py-4">
    <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-16 sm:h-24 rounded-full" src="/img/home.jpg" alt="Woman's Face">
    <div class="mt-4 sm:mt-0 sm:ml-4 text-center sm:text-left">
      <p class="text-xl leading-tight">Buildingg </p>
      <p class="text-sm leading-tight text-gray-600">Nice home for buying</p>
      <div class="mt-4">
        <button class="text-purple-500 hover:text-white hover:bg-purple-500 border border-purple-500 text-xs font-semibold rounded-full px-4 py-1 leading-normal">Message</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>