@if ($message)
	<div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
		<span class="sr-only">Info</span>
		<div class="font-medium">
			{{ $message }}
		</div>
	</div>
@endif