
    <div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div
					class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"
				></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
					<h3 class="pt-4 text-2xl text-center">Create an Account! {{ now() }}</h3>
					<form wire:submit.prevent="saveForm" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post">
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="label-default" for="firstName">
									아이디
								</label>
								<input 
								   class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
								   id="userId"
								   name="userId"
								   type="text"
								   placeholder="아이디"
								   wire:model="userId"
								/>
								@error('userId') <p class="text-xs italic text-red-500">{{ $message }}</p> @enderror
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
									회원명
								</label>
								<input 
								   class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
								   id="userName"
								   name="userName"
								   type="text"
								   placeholder="회원명"
								   wire:model="userName"
								/>
								@error('userName') <p class="text-xs italic text-red-500">{{ $message }}</p> @enderror
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
								Email
							</label>
							<input
								class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
								id="email"
								type="email"
								placeholder="이메일"
							    wire:model="email"
							/>
							@error('email') <p class="text-xs italic text-red-500">{{ $message }}</p> @enderror
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="passwd">
									Password
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline 
										    @error('passwd_confirmation') border-red-500 @enderror
										   "
									id="passwd"
									type="password"
									placeholder="******************"
								    wire:model="passwd"
								/>
								@error('passwd') <p class="text-xs italic text-red-500">{{ $message }}</p> @enderror
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="passwd_confirmation">
									Confirm Password
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline 
										    @error('passwd_confirmation') border-red-500 @enderror
										   "
									id="passwd_confirmation"
									type="password"
									placeholder="******************"
								    wire:model="passwd_confirmation"
								/>
								@error('passwd_confirmation') <p class="text-xs italic text-red-500">{{ $message }}</p> @enderror
							</div>
						</div>
						<div class="mb-6 text-center" wire:loading>
							Processing Payment...
						</div>
						<div class="mb-6 text-center">
							<button
								class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
								type="submit"
							>
								가입하기
							</button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a
								class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
								href="#"
							>
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a
								class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
								href="./index.html"
							>
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


